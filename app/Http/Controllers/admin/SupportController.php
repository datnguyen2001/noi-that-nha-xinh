<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SupportModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SupportController extends Controller
{
    public function index()
    {
        $titlePage = 'Hỗ trợ khách hàng';
        $page_menu = 'customer_support';
        $page_sub = null;
        $listData = SupportModel::orderBy('created_at', 'desc')->paginate(15);

        return view('admin.support.index', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function create ()
    {
        try{
            $titlePage = 'Thêm hỗ trợ';
            $page_menu = 'customer_support';
            $page_sub = null;
            return view('admin.support.create', compact('titlePage', 'page_menu', 'page_sub'));
        }catch (\Exception $e){
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function store (Request $request)
    {
        try{
            $support = new SupportModel([
                'name' => $request->get('name'),
                'slug' => Str::slug($request->get('name')),
                'title' => $request->get('title'),
                'content' => $request->get('content'),
            ]);
            $support->save();
            return redirect()->route('admin.customer_support.index')->with(['success' => 'Tạo dữ liệu mới thành công']);
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function delete ($id)
    {
        $support = SupportModel::find($id);
        $support->delete();
        return redirect()->route('admin.customer_support.index')->with(['success'=>"Xóa dữ liệu thành công"]);
    }

    public function edit ($id)
    {
        try{
            $data = SupportModel::find($id);
            $titlePage = 'Sửa hỗ trợ';
            $page_menu = 'customer_support';
            $page_sub = null;
            return view('admin.support.edit', compact('titlePage', 'page_menu', 'page_sub', 'data'));
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function update ($id, Request $request)
    {
        try{
            $support = SupportModel::find($id);
            $support->name = $request->get('name');
            $support->slug = Str::slug($request->get('name'));
            $support->title = $request->get('title');
            $support->content = $request->get('content');
            $support->save();
            return redirect()->route('admin.customer_support.index')->with(['success' => 'Cập nhật dữ liệu thành công']);
        }catch (\Exception $e){
            return back()->with(['error' => $e->getMessage()]);
        }
    }
}

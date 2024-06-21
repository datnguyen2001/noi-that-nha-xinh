<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HeaderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HeaderController extends Controller
{
    public function index(Request $request)
    {
        $titlePage = 'Danh sách header';
        $page_menu = 'header';
        $page_sub = null;
        $listData = HeaderModel::orderBy('id', 'asc')->paginate(15);

        return view('admin.header.index', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function create()
    {
        try {
            $titlePage = 'Thêm header';
            $page_menu = 'header';
            $page_sub = null;

            return view('admin.header.create', compact('titlePage', 'page_menu', 'page_sub'));
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function store(Request $request)
    {
        try {
            $header = new HeaderModel([
                'name' => $request->get('title'),
                'slug' => Str::slug($request->get('title')),
                'content'=>$request->get('content'),
            ]);
            $header->save();

            return redirect()->route('admin.header.index')->with(['success' => 'Tạo dữ liệu thành công']);
        } catch (\Exception $exception) {
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function delete($id)
    {
        $category = HeaderModel::find($id);
        $category->delete();

        return redirect()->route('admin.header.index')->with(['success'=>"Xóa dữ liệu thành công"]);
    }

    public function edit($id)
    {
        try {
            $data = HeaderModel::find($id);
            if (empty($data)) {
                return back()->with(['error' => 'Dữ liệu không tồn tại']);
            }
            $titlePage = 'Cập nhật header';
            $page_menu = 'header';
            $page_sub = null;

            return view('admin.header.edit', compact('titlePage', 'page_menu', 'page_sub', 'data'));
        } catch (\Exception $exception) {
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function update($id, Request $request)
    {
        try {
            $category = HeaderModel::find($id);
            $category->name = $request->get('title');
            $category->slug = Str::slug($request->get('slug'));
            $category->content = $request->get('content');
            $category->save();

            return redirect()->route('admin.header.index')->with(['success' => 'Cập nhật dữ liệu thành công']);
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()]);
        }
    }
}

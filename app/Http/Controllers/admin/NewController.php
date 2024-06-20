<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\NewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewController extends Controller
{
    public function index(Request $request)
    {
        $titlePage = 'Danh sách tin tức';
        $page_menu = 'new';
        $page_sub = null;
        $listData = NewModel::orderBy('created_at', 'desc')->paginate(15);

        return view('admin.new.index', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function create ()
    {
        try{
            $titlePage = 'Thêm tin tức mới';
            $page_menu = 'new';
            $page_sub = null;
            return view('admin.new.create', compact('titlePage', 'page_menu', 'page_sub'));
        }catch (\Exception $e){
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function store (Request $request)
    {
        try{
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
            }else{
                return back()->with(['info'=>'Vui lòng thêm ảnh để tiếp tục']);
            }
            if ($request->get('display') == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }
            $new = new NewModel([
                'name' => $request->get('name'),
                'slug' => Str::slug($request->get('name')),
                'content' => $request->get('content'),
                'display' => $display,
                'src' => $imagePath
            ]);
            $new->save();
            return redirect()->route('admin.new.index')->with(['success' => 'Tạo dữ liệu mới thành công']);
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function delete ($id)
    {
        $new = NewModel::find($id);
        if (isset($new->src) && Storage::exists(str_replace('/storage', 'public', $new->src))) {
            Storage::delete(str_replace('/storage', 'public', $new->src));
        }
        $new->delete();
        return redirect()->route('admin.new.index')->with(['success'=>"Xóa dữ liệu thành công"]);
    }

    public function edit ($id)
    {
        try{
            $data = NewModel::find($id);
            $titlePage = 'Sửa tin tức';
            $page_menu = 'new';
            $page_sub = null;
            return view('admin.new.edit', compact('titlePage', 'page_menu', 'page_sub', 'data'));
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function update ($id, Request $request)
    {
        try{
            $new = NewModel::find($id);
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
                if (isset($new->src) && Storage::exists(str_replace('/storage', 'public', $new->src))) {
                    Storage::delete(str_replace('/storage', 'public', $new->src));
                }
                $new->src = $imagePath;
            }
            if ($request->get('display') == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }
            $new->name = $request->get('name');
            $new->slug = Str::slug($request->get('name'));
            $new->content = $request->get('content');
            $new->display = $display;
            $new->save();
            return redirect()->route('admin.new.index')->with(['success' => 'Cập nhật dữ liệu thành công']);
        }catch (\Exception $e){
            return back()->with(['error' => $e->getMessage()]);
        }
    }
}

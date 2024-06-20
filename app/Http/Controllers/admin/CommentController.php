<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CommentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        $titlePage = 'Nhận xét của khách hàng';
        $page_menu = 'comment';
        $page_sub = null;
        $listData = CommentModel::orderBy('created_at', 'desc')->paginate(15);

        return view('admin.comment.index', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function create ()
    {
        try{
            $titlePage = 'Thêm nhận xét';
            $page_menu = 'comment';
            $page_sub = null;
            return view('admin.comment.create', compact('titlePage', 'page_menu', 'page_sub'));
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
            $comment = new CommentModel([
                'name_people' => $request->get('name_people'),
                'name' => $request->get('name'),
                'describe' => $request->get('describe'),
                'star' => $request->get('star'),
                'display' => $display,
                'src' => $imagePath
            ]);
            $comment->save();
            return redirect()->route('admin.comment.index')->with(['success' => 'Tạo dữ liệu mới thành công']);
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function delete ($id)
    {
        $comment = CommentModel::find($id);
        if (isset($new->src) && Storage::exists(str_replace('/storage', 'public', $comment->src))) {
            Storage::delete(str_replace('/storage', 'public', $comment->src));
        }
        $comment->delete();
        return redirect()->route('admin.new.index')->with(['success'=>"Xóa dữ liệu thành công"]);
    }

    public function edit ($id)
    {
        try{
            $data = CommentModel::find($id);
            $titlePage = 'Sửa nhận xét';
            $page_menu = 'comment';
            $page_sub = null;
            return view('admin.comment.edit', compact('titlePage', 'page_menu', 'page_sub', 'data'));
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function update ($id, Request $request)
    {
        try{
            $comment = CommentModel::find($id);
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
                if (isset($comment->src) && Storage::exists(str_replace('/storage', 'public', $comment->src))) {
                    Storage::delete(str_replace('/storage', 'public', $comment->src));
                }
                $comment->src = $imagePath;
            }
            if ($request->get('display') == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }
            $comment->name = $request->get('name');
            $comment->name_people = $request->get('name_people');
            $comment->describe = $request->get('describe');
            $comment->star = $request->get('star');
            $comment->display = $display;
            $comment->save();
            return redirect()->route('admin.comment.index')->with(['success' => 'Cập nhật dữ liệu thành công']);
        }catch (\Exception $e){
            return back()->with(['error' => $e->getMessage()]);
        }
    }
}

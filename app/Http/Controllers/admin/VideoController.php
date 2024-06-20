<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\VideoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    public function index()
    {
        $titlePage = 'Danh sách video';
        $page_menu = 'video';
        $page_sub = null;
        $listData = VideoModel::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.video.index', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function create ()
    {
        try{
            $titlePage = 'Thêm video';
            $page_menu = 'video';
            $page_sub = null;
            return view('admin.video.create', compact('titlePage', 'page_menu', 'page_sub'));
        }catch (\Exception $e){
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function store (Request $request)
    {
        try{
            if ($request->get('display') == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }
            $video = new VideoModel([
                'name' => $request->get('name'),
                'slug'=>Str::slug($request->get('name')),
                'investor'=>$request->get('investor'),
                'construction_address'=>$request->get('construction_address'),
                'type'=>$request->get('type'),
                'design_style'=>$request->get('design_style'),
                'main_material'=>$request->get('main_material'),
                'design_unit'=>$request->get('design_unit'),
                'total_construction_area'=>$request->get('total_construction_area'),
                'year_implementation'=>$request->get('year_implementation'),
                'src'=>$request->get('src'),
                'display' => $display,
            ]);
            $video->save();
            return redirect()->route('admin.video.index')->with(['success' => 'Tạo mới dữ liệu thành công']);
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function delete ($id)
    {
        $video = VideoModel::find($id);
        $video->delete();
        return redirect()->route('admin.video.index')->with(['success'=>"Xóa dữ liệu thành công"]);
    }

    public function edit ($id)
    {
        try{
            $data = VideoModel::find($id);
            $titlePage = 'Sửa video';
            $page_menu = 'video';
            $page_sub = null;
            return view('admin.video.edit', compact('titlePage', 'page_menu', 'page_sub', 'data'));
        }catch (\Exception $exception){
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function update ($id, Request $request)
    {
        try{
            $video = VideoModel::find($id);
            if ($request->get('display') == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }
            $video->name = $request->get('name');
            $video->slug = Str::slug($request->get('name'));
            $video->investor = $request->get('investor');
            $video->construction_address = $request->get('construction_address');
            $video->type = $request->get('type');
            $video->design_style = $request->get('design_style');
            $video->main_material = $request->get('main_material');
            $video->design_unit = $request->get('design_unit');
            $video->total_construction_area = $request->get('total_construction_area');
            $video->year_implementation = $request->get('year_implementation');
            $video->src = $request->get('src');
            $video->display = $display;
            $video->save();
            return redirect()->route('admin.video.index')->with(['success' => 'Cập nhật dữ liệu thành công']);
        }catch (\Exception $e){
            return back()->with(['error' => $e->getMessage()]);
        }
    }
}

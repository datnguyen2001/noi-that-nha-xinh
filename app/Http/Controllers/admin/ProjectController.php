<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PostProjectModel;
use App\Models\ProjectImageModel;
use App\Models\ProjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $titlePage = 'Danh mục';
        $page_menu = 'project';
        $page_sub = 'index';
        $listData = ProjectModel::orderBy('id', 'asc')->paginate(10);

        return view('admin.project.category', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function store(Request $request)
    {
        try {
            $project = new ProjectModel([
                'name' => $request->get('name'),
                'slug' => Str::slug($request->get('name')),
                'describe' => Str::slug($request->get('describe')),
            ]);
            $project->save();
            return redirect()->route('admin.project.index')->with(['success' => 'Tạo dữ liệu thành công']);
        } catch (\Exception $exception) {
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function delete($id)
    {
        $project = ProjectModel::find($id);
        $data = PostProjectModel::where('project_id',$id)->get();
        foreach ($data as $val){
            ProjectImageModel::where('post_project_id',$val->id)->delete();
            $val->delete();
        }
        $project->delete();

        return redirect()->route('admin.project.index')->with(['success'=>"Xóa dữ liệu thành công"]);
    }

    public function update($id, Request $request)
    {
        try {
            $project = ProjectModel::find($id);
            $project->name = $request->get('name');
            $project->slug = Str::slug($request->get('name'));
            $project->describe = $request->get('describe');
            $project->save();
            return redirect()->route('admin.project.index')->with(['success' => 'Cập nhật dữ liệu thành công']);
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function info()
    {
        $titlePage = 'Danh sách dự án';
        $page_menu = 'project';
        $page_sub = 'list';
        $listData = PostProjectModel::orderBy('created_at', 'desc')->paginate(15);
        foreach ($listData as $val){
            $val->name_category = ProjectModel::find($val->project_id)->name;
        }

        return view('admin.project.index', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function createInfo()
    {
        try {
            $titlePage = 'Thêm dự án';
            $page_menu = 'project';
            $page_sub = 'list';
            $category = ProjectModel::all();
            return view('admin.project.create', compact('titlePage', 'page_menu', 'page_sub','category'));
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function storeInfo(Request $request)
    {
        try {
            $imagePath = null;
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
            }else{
                return redirect()->back()->with(['error'=>'Vui lòng thêm hình ảnh để tiếp tục']);
            }
            if ($request->get('display') == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }

            $project = new PostProjectModel([
                'name' => $request->get('title'),
                'slug' => $request->get('title'),
                'project_id' => $request->get('project_id'),
                'investor'=>$request->get('investor'),
                'construction_address'=>$request->get('construction_address'),
                'type'=>$request->get('type'),
                'design_style'=>$request->get('design_style'),
                'main_material'=>$request->get('main_material'),
                'design_unit'=>$request->get('design_unit'),
                'total_construction_area'=>$request->get('total_construction_area'),
                'year_implementation'=>$request->get('year_implementation'),
                'content' => $request->get('content'),
                'src' => $imagePath,
                'display' => $display,
            ]);
            $project->save();
            $this->add_img_product($request, $project->id);
            return redirect()->route('admin.project.info')->with(['success' => 'Tạo dữ liệu thành công']);
        } catch (\Exception $exception) {
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function deleteInfo($id)
    {
        $project = PostProjectModel::find($id);
        if (isset($project->src) && Storage::exists(str_replace('/storage', 'public', $project->src))) {
            Storage::delete(str_replace('/storage', 'public', $project->src));
        }
        $data_image = ProjectImageModel::where('post_project_id', $id)->get();
        if ($data_image) {
            foreach ($data_image as $value) {
                if (isset($value->src) && Storage::exists(str_replace('/storage', 'public', $value->src))) {
                    Storage::delete(str_replace('/storage', 'public', $value->src));
                }
                $value->delete();
            }
        }
        $project->delete();
        return redirect()->route('admin.project.info')->with(['success' => "Xóa dữ liệu thành công"]);
    }

    public function editInfo($id)
    {
        try {
            $data = PostProjectModel::find($id);
            $category = ProjectModel::all();
            $image = ProjectImageModel::where('post_project_id',$id)->get();
            $titlePage = 'Cập nhật dự án';
            $page_menu = 'project';
            $page_sub = 'list';
            return view('admin.project.edit', compact('titlePage', 'page_menu', 'page_sub','data',
                'category','image'));

        } catch (\Exception $exception) {
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function updateInfo($id, Request $request)
    {
        try {
            $project = PostProjectModel::find($id);
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
                if (isset($project->src) && Storage::exists(str_replace('/storage', 'public', $project->src))) {
                    Storage::delete(str_replace('/storage', 'public', $project->src));
                }
                $project->src = $imagePath;
            }
            if ($request->get('display') == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }
            $project->name = $request->get('title');
            $project->slug = Str::slug($request->get('title'));
            $project->project_id = $request->get('project_id');
            $project->investor = $request->get('investor');
            $project->construction_address = $request->get('construction_address');
            $project->type = $request->get('type');
            $project->design_style = $request->get('design_style');
            $project->main_material = $request->get('main_material');
            $project->design_unit = $request->get('design_unit');
            $project->total_construction_area = $request->get('total_construction_area');
            $project->year_implementation = $request->get('year_implementation');
            $project->content = $request->get('content');
            $project->display = $display;
            $project->save();
            $this->add_img_product($request, $project->id);
            return redirect()->route('admin.project.info')->with(['success' => 'Cập nhật dữ liệu thành công']);
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function deleteImg(Request $request)
    {
        try {
            $img = ProjectImageModel::find($request->get('id'));
            if (isset($img->src) && Storage::exists(str_replace('/storage', 'public', $img->src))) {
                Storage::delete(str_replace('/storage', 'public', $img->src));
            }
            $img->delete();
            $data['status'] = true;
            return $data;
        } catch (\Exception $exception) {
            $data['status'] = false;
            $data['msg'] = $exception->getMessage();
            return $data;
        }
    }

    public function add_img_product($request, $post_collection_id)
    {
        try {
            if ($request->hasFile('images')) {
                $file = $request->file('images');
                foreach ($file as $value) {
                    $imagePath = Storage::url($value->store('banner', 'public'));
                    $image_invest = new ProjectImageModel([
                        'post_project_id' => $post_collection_id,
                        'src' => $imagePath,
                    ]);
                    $image_invest->save();
                }
                return true;
            }
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}

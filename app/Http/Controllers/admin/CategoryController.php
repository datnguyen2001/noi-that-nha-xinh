<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\HeaderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $titlePage = 'Danh sách danh mục';
        $page_menu = 'category';
        $page_sub = null;
        $listData = CategoryModel::orderBy('id', 'asc')->paginate(15);
        foreach ($listData as $val){
            $val->name_parent = CategoryModel::find($val->parent_id)->name??'Là danh mục cha';
            $val->name_header = HeaderModel::find($val->type)->name??null;
        }

        return view('admin.category.index', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function create()
    {
        try {
            $titlePage = 'Thêm danh mục';
            $page_menu = 'category';
            $page_sub = null;
            $category = CategoryModel::where('parent_id',0)->get();
            $header = HeaderModel::all();

            return view('admin.category.create', compact('titlePage', 'page_menu', 'page_sub','category','header'));
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function store(Request $request)
    {
        try {
            $category = new CategoryModel([
                'name' => $request->get('title'),
                'slug' => Str::slug($request->get('title')),
                'parent_id'=>$request->get('parent_id'),
                'type'=>$request->get('type'),
                'content'=>$request->get('content'),
            ]);
            $category->save();

            return redirect()->route('admin.category.index')->with(['success' => 'Tạo dữ liệu thành công']);
        } catch (\Exception $exception) {
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function delete($id)
    {
        $category = CategoryModel::find($id);
        $category->delete();

        return redirect()->route('admin.category.index')->with(['success'=>"Xóa dữ liệu thành công"]);
    }

    public function edit($id)
    {
        try {
            $data = CategoryModel::find($id);
            if (empty($data)) {
                return back()->with(['error' => 'Dữ liệu không tồn tại']);
            }
            $titlePage = 'Cập nhật danh mục';
            $page_menu = 'category';
            $page_sub = null;
            $category = CategoryModel::where('parent_id',0)->get();
            $header = HeaderModel::all();

            return view('admin.category.edit', compact('titlePage', 'page_menu', 'page_sub', 'data','category','header'));
        } catch (\Exception $exception) {
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function update($id, Request $request)
    {
        try {
            $category = CategoryModel::find($id);
            $category->name = $request->get('title');
            $category->slug = Str::slug($request->get('title'));
            $category->parent_id = $request->get('parent_id');
            $category->type = $request->get('type');
            $category->content = $request->get('content');
            $category->save();

            return redirect()->route('admin.category.index')->with(['success' => 'Cập nhật dữ liệu thành công']);
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function getChildrenC2 (Request $request)
    {
        try{
            $listCategory = CategoryModel::where('parent_id',$request->cate_id)->get();
            $html = null;
            if (count($listCategory)){
                foreach ($listCategory as $value){
                    $option = '<div class="d-flex align-items-center category list_category_children p-1">
                                                <div class="d-flex align-items-center" style="margin-right: 10px"><input type="radio" id="'.$value->id.'" style="width: 20px; height: 20px" value="'.$value->id.'" name="'.$request->get('name').'"></div>
                                                <label for="'.$value->id.'" class="m-0">'.$value->name.'</label>
                                            </div>';
                    $html .= $option;
                }
            }
            $data['html'] = $html;
            $data['status'] = true;
            $data['name'] = $request->get('name');
            return $data;
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }
}

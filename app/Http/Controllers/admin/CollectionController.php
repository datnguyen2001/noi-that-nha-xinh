<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CollectionImageModel;
use App\Models\CollectionModel;
use App\Models\PostCollectionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CollectionController extends Controller
{
    public function index()
    {
        $titlePage = 'Danh mục';
        $page_menu = 'collection';
        $page_sub = 'index';
        $listData = CollectionModel::orderBy('id', 'asc')->paginate(10);

        return view('admin.collection.category', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function store(Request $request)
    {
        try {
            $collection = new CollectionModel([
                'name' => $request->get('name'),
                'slug' => Str::slug($request->get('name')),
            ]);
            $collection->save();
            return redirect()->route('admin.collection.index')->with(['success' => 'Tạo dữ liệu thành công']);
        } catch (\Exception $exception) {
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function delete($id)
    {
        $collection = CollectionModel::find($id);
        $data = PostCollectionModel::where('collection_id',$id)->get();
        foreach ($data as $val){
            CollectionImageModel::where('post_collection_id',$val->id)->delete();
            $val->delete();
        }
        $collection->delete();

        return redirect()->route('admin.collection.index')->with(['success'=>"Xóa dữ liệu thành công"]);
    }

    public function update($id, Request $request)
    {
        try {
            $collection = CollectionModel::find($id);
            $collection->name = $request->get('name');
            $collection->slug = Str::slug($request->get('name'));
            $collection->save();
            return redirect()->route('admin.collection.index')->with(['success' => 'Cập nhật dữ liệu thành công']);
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function info()
    {
        $titlePage = 'Danh sách';
        $page_menu = 'collection';
        $page_sub = 'list';
        $listData = PostCollectionModel::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.collection.index', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function createInfo()
    {
        try {
            $titlePage = 'Thêm danh sách';
            $page_menu = 'collection';
            $page_sub = 'list';
            $category = CollectionModel::all();
            return view('admin.collection.create', compact('titlePage', 'page_menu', 'page_sub','category'));
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

            $collection = new PostCollectionModel([
                'name' => $request->get('title'),
                'slug' => $request->get('title'),
                'collection_id' => $request->get('collection_id'),
                'describe' => $request->get('describe'),
                'content' => $request->get('content'),
                'src' => $imagePath,
                'display' => $display,
            ]);
            $collection->save();
            $this->add_img_product($request, $collection->id);
            return redirect()->route('admin.collection.info')->with(['success' => 'Tạo dữ liệu thành công']);
        } catch (\Exception $exception) {
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function deleteInfo($id)
    {
        $collection = PostCollectionModel::find($id);
        if (isset($collection->src) && Storage::exists(str_replace('/storage', 'public', $collection->src))) {
            Storage::delete(str_replace('/storage', 'public', $collection->src));
        }
        $data_image = CollectionImageModel::where('post_collection_id', $id)->get();
        if ($data_image) {
            foreach ($data_image as $value) {
                if (isset($value->src) && Storage::exists(str_replace('/storage', 'public', $value->src))) {
                    Storage::delete(str_replace('/storage', 'public', $value->src));
                }
                $value->delete();
            }
        }
        $collection->delete();
        return redirect()->route('admin.collection.info')->with(['success' => "Xóa dữ liệu thành công"]);
    }

    public function editInfo($id)
    {
        try {
            $data = PostCollectionModel::find($id);
            $category = CollectionModel::all();
            $image = CollectionImageModel::where('post_collection_id',$id)->get();
            $titlePage = 'Cập nhật Thông tin';
            $page_menu = 'collection';
            $page_sub = 'list';
            return view('admin.collection.edit', compact('titlePage', 'page_menu', 'page_sub','data',
                'category','image'));

        } catch (\Exception $exception) {
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function updateInfo($id, Request $request)
    {
        try {
            $collection = PostCollectionModel::find($id);
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
                if (isset($collection->src) && Storage::exists(str_replace('/storage', 'public', $collection->src))) {
                    Storage::delete(str_replace('/storage', 'public', $collection->src));
                }
                $collection->src = $imagePath;
            }
            if ($request->get('display') == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }
            $collection->name = $request->get('title');
            $collection->slug = Str::slug($request->get('title'));
            $collection->collection_id = $request->get('collection_id');
            $collection->describe = $request->get('describe');
            $collection->content = $request->get('content');
            $collection->display = $display;
            $collection->save();
            $this->add_img_product($request, $collection->id);
            return redirect()->route('admin.collection.info')->with(['success' => 'Cập nhật dữ liệu thành công']);
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function deleteImg(Request $request)
    {
        try {
            $img = CollectionImageModel::find($request->get('id'));
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
                    $image_invest = new CollectionImageModel([
                        'post_collection_id' => $post_collection_id,
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

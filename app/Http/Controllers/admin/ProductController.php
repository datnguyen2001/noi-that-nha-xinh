<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\ProductImageModel;
use App\Models\ProductModel;
use App\Models\ProjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $titlePage = 'Danh sách sản phẩm';
        $page_menu = 'product';
        $page_sub = null;
        if (isset($request->key_search)) {
            $listData = ProductModel::where('name', 'like', '%' . $request->get('key_search') . '%')
                ->orderBy('created_at', 'desc')->paginate(15);
        }else{
            $listData = ProductModel::orderBy('created_at', 'desc')->paginate(15);
        }
        foreach ($listData as $val){
            $val->name_category = CategoryModel::find($val->category_id)->name;
        }

        return view('admin.product.index', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function create()
    {
        try {
            $titlePage = 'Thêm sản phẩm';
            $page_menu = 'product';
            $page_sub = null;
            $category = CategoryModel::where('parent_id',0)->get();
            return view('admin.product.create', compact('titlePage', 'page_menu', 'page_sub','category'));
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function store(Request $request)
    {
        try {
            $imagePath = null;
            $category = CategoryModel::find($request->get('category'));
            if (empty($category)) {
                return back()->with(['error' => 'Vui lòng chọn danh mục để tiếp tục']);
            }
            $category_id = $category->id;
            $category2 = CategoryModel::find($request->get('category_children'));
            if (isset($category2)) {
                $category_id = $category2->id;
            }
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('product', 'public'));
            }else{
                return redirect()->back()->with(['error'=>'Vui lòng thêm hình ảnh để tiếp tục']);
            }
            if ($request->get('display') == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }
            if ($request->get('pricing') == 'on'){
                $pricing = 1;
            }else{
                $pricing = 0;
            }
            if ($request->get('is_sale') == 'on'){
                $sale = 1;
            }else{
                $sale = 0;
            }
            $price = $request->get('price');
            $price_promotional = $request->get('price_promotional');
            $product = new ProductModel([
                'name' => $request->get('title'),
                'slug' => $request->get('title'),
                'category_id' => $category_id,
                'guarantee'=>$request->get('guarantee'),
                'material'=>$request->get('material'),
                'size'=>$request->get('size'),
                'sectors'=>$request->get('sectors'),
                'producer'=>$request->get('producer'),
                'other_materials'=>$request->get('other_materials'),
                'price'=>isset($price) ? str_replace(",", "", $price) : null,
                'price_promotional' => isset($price_promotional) ? str_replace(",", "", $price_promotional) : null,
                'pricing'=>$pricing,
                'describe'=>$request->get('describe'),
                'why_choose_us'=>$request->get('why_choose_us'),
                'src' => $imagePath,
                'display' => $display,
                'is_sale' => $sale,
            ]);
            $product->save();
            $this->add_img_product($request, $product->id);
            return redirect()->route('admin.product.index')->with(['success' => 'Tạo dữ liệu thành công']);
        } catch (\Exception $exception) {
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function delete($id)
    {
        $product = ProductModel::find($id);
        if (isset($product->src) && Storage::exists(str_replace('/storage', 'public', $product->src))) {
            Storage::delete(str_replace('/storage', 'public', $product->src));
        }
        $data_image = ProductImageModel::where('product_id', $id)->get();
        if ($data_image) {
            foreach ($data_image as $value) {
                if (isset($value->src) && Storage::exists(str_replace('/storage', 'public', $value->src))) {
                    Storage::delete(str_replace('/storage', 'public', $value->src));
                }
                $value->delete();
            }
        }
        $product->delete();
        return redirect()->route('admin.product.index')->with(['success' => "Xóa dữ liệu thành công"]);
    }

    public function edit($id)
    {
        try {
            $data = ProductModel::find($id);
            $category_all = CategoryModel::where('parent_id', 0)->get();
            $cate_big = CategoryModel::find($data->category_id);
            if ($cate_big->parent_id == 0){
                $category_child = [];
            }else{
                $category_child = CategoryModel::where('parent_id',$cate_big->parent_id)->get();
            }
            $image = ProductImageModel::where('product_id',$id)->get();
            $titlePage = 'Cập nhật sản phẩm';
            $page_menu = 'product';
            $page_sub = null;
            return view('admin.product.edit', compact('titlePage', 'page_menu', 'page_sub','data','category_all',
                'category_child','image','cate_big'));

        } catch (\Exception $exception) {
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function update($id, Request $request)
    {
        try {
            $product = ProductModel::find($id);
            $category = CategoryModel::find($request->get('category'));
            if (empty($category)) {
                return back()->with(['error' => 'Vui lòng chọn danh mục để tiếp tục']);
            }
            $category_id = $category->id;
            $category2 = CategoryModel::find($request->get('category_children'));
            if (isset($category2)) {
                $category_id = $category2->id;
            }
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
                if (isset($product->src) && Storage::exists(str_replace('/storage', 'public', $product->src))) {
                    Storage::delete(str_replace('/storage', 'public', $product->src));
                }
                $product->src = $imagePath;
            }
            if ($request->get('display') == 'on'){
                $display = 1;
            }else{
                $display = 0;
            }
            if ($request->get('pricing') == 'on'){
                $pricing = 1;
            }else{
                $pricing = 0;
            }
            if ($request->get('is_sale') == 'on'){
                $sale = 1;
            }else{
                $sale = 0;
            }
            $price = $request->get('price');
            $price_promotional = $request->get('price_promotional');
            $product->name = $request->get('title');
            $product->slug = Str::slug($request->get('title'));
            $product->category_id = $category_id;
            $product->guarantee = $request->get('guarantee');
            $product->material = $request->get('material');
            $product->size = $request->get('size');
            $product->sectors = $request->get('sectors');
            $product->producer = $request->get('producer');
            $product->other_materials = $request->get('other_materials');
            $product->price = isset($price) ? str_replace(",", "", $price) : null;
            $product->price_promotional = isset($price_promotional) ? str_replace(",", "", $price_promotional) : null;
            $product->pricing = $pricing;
            $product->describe=$request->get('describe');
            $product->why_choose_us=$request->get('why_choose_us');
            $product->display = $display;
            $product->is_sale = $sale;
            $product->save();
            $this->add_img_product($request, $product->id);
            return redirect()->route('admin.product.index')->with(['success' => 'Cập nhật dữ liệu thành công']);
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function deleteImg(Request $request)
    {
        try {
            $img = ProductImageModel::find($request->get('id'));
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

    public function add_img_product($request, $product_id)
    {
        try {
            if ($request->hasFile('images')) {
                $file = $request->file('images');
                foreach ($file as $value) {
                    $imagePath = Storage::url($value->store('product', 'public'));
                    $image_invest = new ProductImageModel([
                        'product_id' => $product_id,
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

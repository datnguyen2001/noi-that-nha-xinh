<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\HeaderModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class NoiThatGoOcChoController extends Controller
{
    public function menu($slug)
    {
        $menu = HeaderModel::where('slug',$slug)->first();
        $category = CategoryModel::where('type',$menu->id)->where('parent_id',0)->get();
        foreach ($category as $cate){
            $cate_product = CategoryModel::where('parent_id', $cate->id)->pluck('id')->toArray();
            $cate_product[] = $cate->id;
            $cate->product = ProductModel::whereIn('category_id',$cate_product)->get();
        }

        return view('web.noi-that-go-oc-cho.index',compact('category','menu'));
    }

    public function category($slug)
    {
        $menu = CategoryModel::where('slug',$slug)->first();
        $category = CategoryModel::where('parent_id',$menu->id)->get();
        foreach ($category as $cate){
            $cate->product  = ProductModel::where('category_id',$cate->id)->get();
        }

        return view('web.noi-that-go-oc-cho.index2',compact('category','menu'));
    }

    public function categoryProduct($slug)
    {
        $menu = CategoryModel::where('slug',$slug)->first();
        $category = CategoryModel::where('parent_id',$menu->parent_id)->get();
        $listData = ProductModel::where('category_id',$menu->id)->get();

        return view('web.noi-that-go-oc-cho.detail',compact('listData','category','menu'));
    }

    public function sanPham()
    {
        return view('web.noi-that-go-oc-cho.details.san-pham');
    }
}


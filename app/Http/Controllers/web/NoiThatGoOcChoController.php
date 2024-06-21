<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class NoiThatGoOcChoController extends Controller
{
    public function index()
    {
        $category = CategoryModel::where('parent_id',0)->where('type',1)->get();
        foreach ($category as $cate){
            $cate->product =  $listData = ProductModel::where('category_id',$cate->id)->get();
        }

        return view('web.noi-that-go-oc-cho.index',compact('listData','category'));
    }

    public function sanPham()
    {
        return view('web.noi-that-go-oc-cho.details.san-pham');
    }
}


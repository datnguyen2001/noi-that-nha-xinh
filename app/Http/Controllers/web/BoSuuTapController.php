<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use App\Models\CollectionModel;
use App\Models\PostCollectionModel;
use Illuminate\Http\Request;

class BoSuuTapController extends Controller
{
    public function boSuuTap()
    {
        $banner_collection = BannerModel::where('location',5)->where('display',1)->first();
        $category_collection = CollectionModel::all();
        $post_collection = PostCollectionModel::where('display',1)->orderBy('created_at','desc')->get();
        return view('web.bo-suu-tap.index',compact('banner_collection','category_collection','post_collection'));
    }
}

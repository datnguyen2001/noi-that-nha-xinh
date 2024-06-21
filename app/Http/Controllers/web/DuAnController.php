<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\PostProjectModel;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class DuAnController extends Controller
{
    public function duAn(){
        $cate_project = ProjectModel::all();
        foreach ($cate_project as $val){
            $val->post = PostProjectModel::where('project_id',$val->id)->where('display',1)->take(10)->get();
        }
        return view('web.du-an.index',compact('cate_project'));
    }

    public function details($slug)
    {
        $cate = ProjectModel::where('slug',$slug)->first();
        $dataProject = PostProjectModel::where('project_id',$cate->id)->where('display',1)->get();
        return view('web.du-an.details.du-an-details',compact('dataProject','cate'));
    }
}

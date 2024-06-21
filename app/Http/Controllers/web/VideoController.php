<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\VideoModel;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function videoDetail($slug)
    {
        $videoDetails = VideoModel::where('slug', $slug)->first();
        $video_project = VideoModel::where('selection',1)->where('display',1)->orderBy('created_at','desc')->get();
        $video_sp = VideoModel::where('selection',2)->where('display',1)->orderBy('created_at','desc')->get();

        return view('web.video-details.index', compact('videoDetails', 'video_project', 'video_sp'));
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\StoreIntroduceModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IntroduceController extends Controller
{
    public function index()
    {
        $titlePage = 'Giới thiệu cửa hàng';
        $page_menu = 'introduce';
        $page_sub = null;
        $data = StoreIntroduceModel::first();

        return view('admin.introduce.index',compact('titlePage','page_menu','page_sub','data'));
    }

    public function save(Request $request){
        $introduct = StoreIntroduceModel::first();
        if ($introduct){
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
                if (isset($introduct->src) && Storage::exists(str_replace('/storage', 'public', $introduct->src))) {
                    Storage::delete(str_replace('/storage', 'public', $introduct->src));
                }
                $introduct->src = $imagePath;
            }
            $introduct->name = $request->get('name');
            $introduct->title = $request->get('title');
            $introduct->link_video = $request->get('link_video');
            $introduct->describe = $request->get('describe');
            $introduct->content = $request->get('content');
            $introduct->save();
        }else{
            $imagePath = null;
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
            }
            $introduct = new StoreIntroduceModel([
                'name'=>$request->get('name'),
                'title'=>$request->get('title'),
                'src'=>$imagePath,
                'link_video'=>$request->get('hotline'),
                'describe'=>$request->get('describe'),
                'content'=>$request->get('content'),
            ]);
            $introduct->save();
        }

        return redirect()->back()->with(['success'=>"Lưu thông tin thành công"]);
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SettingModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $titlePage = 'Cài đặt';
        $page_menu = 'setting';
        $page_sub = null;
        $data = SettingModel::first();

        return view('admin.setting.index',compact('titlePage','page_menu','page_sub','data'));
    }

    public function save(Request $request){
        $setting = SettingModel::first();
        if ($setting){
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
                if (isset($setting->logo) && Storage::exists(str_replace('/storage', 'public', $setting->logo))) {
                    Storage::delete(str_replace('/storage', 'public', $setting->logo));
                }
                $setting->logo = $imagePath;
            }
            if ($request->hasFile('image_address')){
                $file = $request->file('image_address');
                $imageMap = Storage::url($file->store('banner', 'public'));
                if (isset($setting->image_address) && Storage::exists(str_replace('/storage', 'public', $setting->image_address))) {
                    Storage::delete(str_replace('/storage', 'public', $setting->image_address));
                }
                $setting->image_address = $imageMap;
            }
            $setting->name_header = $request->get('name_header');
            $setting->name_footer = $request->get('name_footer');
            $setting->hotline = $request->get('hotline');
            $setting->phone = $request->get('phone');
            $setting->email = $request->get('email');
            $setting->website = $request->get('website');
            $setting->zalo = $request->get('zalo');
            $setting->link_address = $request->get('link_address');
            $setting->save();
        }else{
            $imagePath = null;
            $imageMap = null;
            if ($request->hasFile('file')){
                $file = $request->file('file');
                $imagePath = Storage::url($file->store('banner', 'public'));
            }
            if ($request->hasFile('image_address')){
                $file = $request->file('image_address');
                $imageMap = Storage::url($file->store('banner', 'public'));
            }
            $setting = new SettingModel([
                'name_header'=>$request->get('name_header'),
                'name_footer'=>$request->get('name_footer'),
                'logo'=>$imagePath,
                'hotline'=>$request->get('hotline'),
                'phone'=>$request->get('phone'),
                'email'=>$request->get('email'),
                'website'=>$request->get('website'),
                'zalo'=>$request->get('zalo'),
                'image_address'=>$imageMap,
                'link_address'=>$request->get('link_address'),
            ]);
            $setting->save();
        }

        return redirect()->back()->with(['success'=>"Lưu thông tin thành công"]);
    }
}

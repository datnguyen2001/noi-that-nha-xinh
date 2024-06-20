<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUsModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $titlePage = 'Liên hệ với chúng tôi';
        $page_menu = 'contact_us';
        $page_sub = null;
        $data = ContactUsModel::first();

        return view('admin.contact_us.index',compact('titlePage','page_menu','page_sub','data'));
    }

    public function save(Request $request){
        $contact = ContactUsModel::first();
        if ($contact){
            $contact->name = $request->get('name');
            $contact->address_office = $request->get('address_office');
            $contact->hotline = $request->get('hotline');
            $contact->phone = $request->get('phone');
            $contact->email = $request->get('email');
            $contact->website = $request->get('website');
            $contact->map_office = $request->get('map_office');
            $contact->address_factory = $request->get('address_factory');
            $contact->map_factory = $request->get('map_factory');
            $contact->save();
        }else{
            $contact = new ContactUsModel([
                'name'=>$request->get('name'),
                'address_office'=>$request->get('address_office'),
                'hotline'=>$request->get('hotline'),
                'phone'=>$request->get('phone'),
                'email'=>$request->get('email'),
                'website'=>$request->get('website'),
                'map_office'=>$request->get('map_office'),
                'address_factory'=>$request->get('address_factory'),
                'map_factory'=>$request->get('map_factory'),
            ]);
            $contact->save();
        }

        return redirect()->back()->with(['success'=>"Lưu thông tin thành công"]);
    }
}

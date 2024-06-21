<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoiThatGoOcChoController extends Controller
{
    public function index()
    {
        return view('web.noi-that-go-oc-cho.index');
    }
    public function sanPham()
    {
        return view('web.noi-that-go-oc-cho.details.san-pham');
    }
}


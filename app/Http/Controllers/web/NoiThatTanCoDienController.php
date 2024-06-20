<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoiThatTanCoDienController extends Controller
{
    public function index()
    {
        return view('web.noi-that-tan-co-dien.index');
    }
}

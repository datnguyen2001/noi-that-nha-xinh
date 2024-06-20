<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhongThoController extends Controller
{
    public function banTho() {
        return view('web.phong-tho.index');
    }
}

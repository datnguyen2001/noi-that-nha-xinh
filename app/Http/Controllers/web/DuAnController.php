<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DuAnController extends Controller
{
    public function duAn(){
        return view('web.du-an.index');
    }
}

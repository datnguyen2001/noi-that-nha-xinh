<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoSuuTapController extends Controller
{
    public function boSuuTap()
    {
        return view('web.bo-suu-tap.index');
    }
}

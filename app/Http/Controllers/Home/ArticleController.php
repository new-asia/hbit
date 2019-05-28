<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ArticleController extends Controller
{
    //文章内容
    public function show(){
        return view('home/show');
    }
    //文章列表
    public function Campusall(){
        return view('home/Campusall');
    }
}

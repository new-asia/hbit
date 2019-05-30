<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Category;

class ArticleController extends Controller
{
    //文章内容
    public function show(){
        return view('home/show');
    }
    //文章列表
    
    public function Campusall(){
        $Category = new Category();
        $list = $Category->ArticleList();
        //print_r();die;
        return view('home/Campusall',['list'=>$list]);
    }
}

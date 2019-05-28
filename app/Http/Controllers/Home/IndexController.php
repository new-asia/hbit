<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class IndexController extends Controller
{
    public function index(){
        return view('home/index');
    }

    public function studentemployment(){
        return view('home/studentemployment');
    }

    public function faculty(){
        return view('home/faculty');
    }

    public function StudentsStory(){
        return view('home/StudentsStory');
    }

    public function idea(){
        return view('home/idea');
    }
    //文章内容
    public function show(){
        return view('home/show');
    }
    //文章列表
    public function Campusall(){
        return view('home/Campusall');
    }


}

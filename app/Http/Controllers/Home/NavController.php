<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class NavController extends Controller
{
    public function idea(){
        return view('home/idea');
    }

    public function history(){
        return view('home/history');
    }

    public function flow(){
        return view('home/flow');
    }

    public function abouts(){
        return view('home/abouts');
    }

    public function ClassInfomation(){
        return view('home/ClassInfomation');
    }

    public function header_nav(){

        return view('home/layouts/header');
    }
}

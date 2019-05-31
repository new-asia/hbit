<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\NavMenu;
use Illuminate\View\View;

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

    public function header_nav(View $view){
        $nav = new NavMenu();
        $nav = $nav -> nav_list();
        $view->with('nav',$nav);
        //return view('home/layouts/header',['nav'=>$nav]);
    }
}

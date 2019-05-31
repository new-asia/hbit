<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\NavMenu;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Title;

class NavController extends Controller
{
    public function __construct()
    {
        view()->composer('home.layouts.header','App\Http\Controllers\Home\NavController@header_nav');
    }
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
    }
    public function header_title(Request $request){
        $id =$request->input('id');
        $title = new Title();
        $title = $title->title_list($id);
        return json_encode($title);
    }
}

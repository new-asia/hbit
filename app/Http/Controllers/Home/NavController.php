<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\NavMenu;
use Illuminate\Support\Facades\Input;
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
        $isMobile = $this->isMobile();

        if ($isMobile) {
            return view('api/abouts');
        }
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
        $route =  \Request::getRequestUri();
        $route = ltrim($route,'/');
        $nav = new NavMenu();
        $nav = $nav -> nav_list();
        $titles = '北京鸿博教育-匠心打造,品质铸就';
        if($route != ''){
            $title = new Title();
            foreach ($nav as $v){
                if($route == $v->href){
                    $titles = $title->title_list($v->id);
                    $titles = $titles[0]->title;
                }
            }
        }else{
            $titles = '北京鸿博教育-匠心打造,品质铸就';
        }


        $view->with(['nav'=>$nav,'title'=>$titles]);
    }

}

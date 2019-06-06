<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\NavMenu;
use Illuminate\Support\Facades\Input;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Title;
use App\Models\Link;
use App\Models\Course;

use App\Models\Campus;

class NavController extends Controller
{
    public function __construct()
    {
        view()->composer('home.layouts.header','App\Http\Controllers\Home\NavController@header_nav');
        view()->composer('home.layouts.footer','App\Http\Controllers\Home\NavController@footer_link');
    }
    public function idea(){
        $isMobile = $this->isMobile();

        if ($isMobile) {
            return view('api/idea');
        }
        return view('home/idea');
    }

    public function history(){
        $isMobile = $this->isMobile();

        if ($isMobile) {
            return view('api/history');
        }
        return view('home/history');
    }
    public function school(){
        $isMobile = $this->isMobile();

        if ($isMobile) {
            return view('api/school');
        }
        return view('home/school');
    }
    public function flow(){
        $campus = Campus::getAllCampus();//校区下拉

        $courseall = Course::getAllCourse();//课程下拉
       // dd($campus);
        return view('home/flow',['courses'=>$courseall,'campus'=>$campus]);
    }

    public function abouts(){
        $isMobile = $this->isMobile();

        if ($isMobile) {
            return view('api/abouts');
        }
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
                    $navtitle = $title->title_list($v->id);
                    if(!empty($navtitle->items)){
                        $titles = $titles[0]->title;
                    }
                }
            }
        }

        $view->with(['nav'=>$nav,'title'=>$titles]);
    }
    public function footer_link(View $view){
        $links = new Link();
        $link = $links -> getLink();
        $option = $links -> getoption();
        $option = json_decode($option[0]->option_value);
        $view->with(['link'=>$link,'option'=>$option]);
    }
}

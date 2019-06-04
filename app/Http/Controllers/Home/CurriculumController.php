<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Advert;
use App\Models\Teacher;

class CurriculumController extends Controller
{
    public function __construct()
    {
        view()->composer('home.layouts.faculty','App\Http\Controllers\Home\IndexController@teacher');
        view()->composer('home.layouts.header','App\Http\Controllers\Home\NavController@header_nav');
        view()->composer('home.layouts.footer','App\Http\Controllers\Home\NavController@footer_link');
    }
    public function java(){
        $isMobile = $this->isMobile();
        if($isMobile){
            $teacher = new Teacher();
            $tea_list = $teacher->getTeacherLimits(6,2);
            //print_r($tea_list);die;
            return view('api/java',['tea_list'=>$tea_list]);
        }
        $advert = new Advert();
        $advert = $advert->getAdvert(4);
        return view('home/java',['advert'=>$advert]);
    }

    public function php(){
        $isMobile = $this->isMobile();
        if($isMobile){
            return view('api/php');
        }
        return view('home/php');
    }

    public function html5(){
        $isMobile = $this->isMobile();
        if($isMobile){
            return view('api/html5');
        }
        return view('home/html5');
    }

    public function python(){
        $isMobile = $this->isMobile();
        if($isMobile){
            return view('api/python');
        }
        $teacher = new Teacher();
        $tea_list = $teacher->getpyTeacher(6);
        return view('home/python',['tea_list'=>$tea_list]);
    }
}

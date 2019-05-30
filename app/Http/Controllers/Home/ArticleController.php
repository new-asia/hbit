<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Category;
use App\Models\Advert;
use App\Models\Course;

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
        $advert = new Advert();
        $advert = $advert->getAdvert(7);
        $course = new Course();
        $course = $course->course();
        //print_r($advert);die;
        return view('home/Campusall',['list'=>$list,'advert'=>$advert,'course'=>$course]);
    }
}

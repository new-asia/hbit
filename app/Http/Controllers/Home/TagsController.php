<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Category;
use App\Models\Advert;
use App\Models\Course;
use App\Models\Tags;
use App\Models\Campus;
use App\Models\Article;
use App\Models\Teacher;

class TagsController extends Controller
{
    public function __construct()
    {
        view()->composer('home.layouts.header','App\Http\Controllers\Home\NavController@header_nav');
        view()->composer('home.layouts.footer','App\Http\Controllers\Home\NavController@footer_link');
    }
    //文章内容
    public function show($id){

        if((int)$id <= 0) return view('error');

        
        $Article = new Article();
        $Article_list = $Article->getall($id);//分页  数据

        $advert = new Advert();
        $advert = $advert->getAdvert(7);//图片


        $course = new Course();
        $course = $course->course();//开课信息


        $campus = Campus::getAllCampus();//右侧校区下拉
        $courseall = Course::getAllCourse();//右侧课程下拉
        $Tags =Tags::find($id);//标签
 
        return view('home/tags/show',['article'=>$Article_list,'tags'=>$Tags,'advert'=>$advert,'courseall'=>$courseall,'course'=>$course,'campus'=>$campus]);
    }
    //文章列表
     
}

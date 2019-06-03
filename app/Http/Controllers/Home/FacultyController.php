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

class FacultyController extends Controller
{
    public function __construct()
    {
        view()->composer('home.layouts.header','App\Http\Controllers\Home\NavController@header_nav');
    }
    //文章内容
    public function show($id){

        if((int)$id <= 0) return view('error');


        $Teacher = Teacher::one($id);
        if(!$Teacher) return view('error');
        
        $teacher = new Teacher();
        $data = $teacher->getTeacher();
         
        $advert = new Advert();
        $advert = $advert->getAdvert(7);//图片


        $course = new Course();
        $course = $course->course();//开课信息


        $campus = Campus::getAllCampus();//右侧校区下拉
        $courseall = Course::getAllCourse();//右侧课程下拉
        $Tags =Tags::allcount();//右下角鸿博标签
 
        return view('home/faculty/show',['teacher'=>$Teacher[0],"teacher_list"=>$data,'tags'=>$Tags,'advert'=>$advert,'courseall'=>$courseall,'course'=>$course,'campus'=>$campus]);
    }
    //文章列表
     
}

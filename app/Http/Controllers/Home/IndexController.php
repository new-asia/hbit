<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Advert;
use App\Models\Course;
use App\Models\Tags;
use App\Models\NavMenu;

class IndexController extends Controller
{
    public function index(){
        $advert = new Advert();
        $rotation_chart = $advert->rotation_chart();
        $course = new Course();
        $course = $course->cou_index();
        $nav = new NavMenu();
        $nav = $nav -> nav_list();
        //print_r($nav);die;
        return view('home/index',['rotation_chart'=>$rotation_chart,'course'=>$course,'nav'=>$nav]);
    }

    public function studentemployment(){
        $student = new Student();
        $data = $student->getStudentLimit(7);
        $advert = new Advert();
        $advert = $advert->getAdvert(2);
        return view('home/studentemployment',['student'=>$data,'advert'=>$advert]);
    }

    public function faculty(){
        $teacher = new Teacher();
        $data = $teacher->getTeacher();
        $advert = new Advert();
        $advert = $advert->getAdvert(1);
        $course = new Course();
        $course = $course->course();
        $Tags =Tags::allcount();
        return view('home/faculty',['teacher'=>$data,'advert'=>$advert,'course'=>$course,'tags'=>$Tags]);
    }

    public function StudentsStory(){
        $student = new Student();
        $data = $student->getStudent();
        $advert = new Advert();
        $stu_story = $advert->getAdvert(3);
        return view('home/StudentsStory',['student'=>$data,'stu_story'=>$stu_story]);
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

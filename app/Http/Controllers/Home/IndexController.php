<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Advert;
use App\Models\Course;

class IndexController extends Controller
{
    public function index(){
        $advert = new Advert();
        $rotation_chart = $advert->rotation_chart();
        return view('home/index',['rotation_chart'=>$rotation_chart]);
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
        return view('home/faculty',['teacher'=>$data,'advert'=>$advert,'course'=>$course]);
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

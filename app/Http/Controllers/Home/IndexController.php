<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Tags;
class IndexController extends Controller
{
    public function index(){
        return view('home/index');
    }

    public function studentemployment(){
        $student = new Student();
        $data = $student->getStudentLimit(7);
        return view('home/studentemployment',['student'=>$data]);
    }

    public function faculty(){
        $teacher = new Teacher();
        $data = $teacher->getTeacher();
        $Tags =Tags::allcount();
        return view('home/faculty',['teacher'=>$data,'tags'=>$Tags]);
    }

    public function StudentsStory(){
        $student = new Student();
        $data = $student->getStudent();
        return view('home/StudentsStory',['student'=>$data]);
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

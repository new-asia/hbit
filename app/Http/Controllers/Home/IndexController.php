<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Teacher;
use App\Models\Student;
class IndexController extends Controller
{
    public function index(){
        return view('home/index');
    }

    public function studentemployment(){
        return view('home/studentemployment');
    }

    public function faculty(){
        $teacher = new Teacher();
        $data = $teacher->orderBy('teacher_sort')->get();
        return view('home/faculty',['teacher'=>$data]);
    }

    public function StudentsStory(){
        $student = new Student();
        $data = $student->orderBy('list_order')->get();
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

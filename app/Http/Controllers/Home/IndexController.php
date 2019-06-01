<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Advert;
use App\Models\Course;
use App\Models\Tags;
use App\Models\Campus;
class IndexController extends Controller
{
    public function __construct()
    {
        view()->composer('home.layouts.header','App\Http\Controllers\Home\NavController@header_nav');
    }
    public function index(){
        $advert = new Advert();
        $rotation_chart = $advert->rotation_chart();
        $course = new Course();
        $course = $course->cou_index();
        $isMobile = $this->isMobile();

        if ($isMobile) {
            return view('api/index');
        } else {
            return view('home/index',['rotation_chart'=>$rotation_chart,'course'=>$course]);
        }
        
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
        $isMobile = $this->isMobile();

        if ($isMobile) {
            return view('api/faculty',["teacher"=>$data]);
        } else {
            $advert = new Advert();
            $advert = $advert->getAdvert(1);
            $course = new Course();
            $course = $course->course();
            $Tags =Tags::allcount();
            $campus = Campus::getAllCampus();
            $course = Course::getAllCourse();
            return view('home/faculty',['teacher'=>$data,'campus'=>$campus,'advert'=>$advert,'course'=>$course,'tags'=>$Tags]);
        }
    }

    public function StudentsStory(){
        $isMobile = $this->isMobile();

        if ($isMobile) {
            return view('api/StudentsStory');
        }
        $student = new Student();
        $data = $student->getStudent();
        $advert = new Advert();
        $stu_story = $advert->getAdvert(3);
        return view('home/StudentsStory',['student'=>$data,'stu_story'=>$stu_story]);
    }

    public function idea()
    {
        return view('home/idea');
    }

    public function EmploymentInformation(){
        $employment = new Student();
        $employment = $employment->Studentlist();
        return view("api/EmploymentInformation",['employment'=>$employment]);
    }

    public function phonebd(){
        return view("api/phonebd");
    }
}

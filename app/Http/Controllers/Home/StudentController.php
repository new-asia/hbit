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
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        view()->composer('home.layouts.faculty','App\Http\Controllers\Home\IndexController@teacher');
        view()->composer('home.layouts.header','App\Http\Controllers\Home\NavController@header_nav');
        view()->composer('home.layouts.footer','App\Http\Controllers\Home\NavController@footer_link');
    }
    //学生内容
    public function show($id){
        if((int)$id <= 0) return view('error');
        $student = Student::studentOne($id);
        //dump($student);
        if(!$student) return view('error');
        return view('api/StudentsStory/studentShow',['student'=>$student]);
    }


    public function Studentsdetails(Request $request){
        $id = $request->input('id');
        $Studentfind = new Student();
        $Studentfind = $Studentfind->Studentfind($id);
        $Studentfind = $Studentfind->toArray();

        $Tags =Tags::allcount();

        $course = new Course();
        $course = $course->course();

        $advert = new Advert();
        $advert = $advert->getAdvert(1);
        $campus = Campus::getAllCampus();
        $courseall = Course::getAllCourse();
        $relevant = Article::relevant(array(),$id);
        $prevID = Student::prevID($id);
        $nextId = Student::nextId($id);
        if(empty($prevID)){
            $prev['student_id'] = 0;
            $prev['name'] = '已经是第一位';
        }else{
            $prev = Student::select('student_id','name')->find($prevID);
            $strlen     = mb_strlen($prev['name'], 'utf-8');
            $firstStr     = mb_substr($prev['name'], 0, 1, 'utf-8');
            $lastStr     = mb_substr($prev['name'], -1, 1, 'utf-8');
            $prev['name'] = $strlen == 2 ? $firstStr . str_repeat('*', mb_strlen($prev['name'], 'utf-8') - 1) : $firstStr . str_repeat("*", $strlen - 2) . $lastStr;
        }
        if(empty($nextId)){
            $next['name'] = '没有了';
            $next['student_id'] = 0;
        }else{
            $next = Student::select('student_id','name')->find($nextId);
            $strlen     = mb_strlen($next['name'], 'utf-8');
            $firstStr     = mb_substr($next['name'], 0, 1, 'utf-8');
            $lastStr     = mb_substr($next['name'], -1, 1, 'utf-8');
            $next['name'] = $strlen == 2 ? $firstStr . str_repeat('*', mb_strlen($next['name'], 'utf-8') - 1) : $firstStr . str_repeat("*", $strlen - 2) . $lastStr;
        }
        foreach ($Studentfind as $v){
            $strlen     = mb_strlen($v->name, 'utf-8');
            $firstStr     = mb_substr($v->name, 0, 1, 'utf-8');
            $lastStr     = mb_substr($v->name, -1, 1, 'utf-8');
            $v->name = $strlen == 2 ? $firstStr . str_repeat('*', mb_strlen($v->name, 'utf-8') - 1) : $firstStr . str_repeat("*", $strlen - 2) . $lastStr;
        }
        //print_r($Studentfind);die;
        return view("home/studentsdetails",['relevant'=>$relevant,'next'=>$next,'prev'=>$prev,'studentfind'=>$Studentfind,'courseall'=>$courseall,'Tags'=>$Tags,'course'=>$course,'advert'=>$advert,'campus'=>$campus]);
    }
     
}

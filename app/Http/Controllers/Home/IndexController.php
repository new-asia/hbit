<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class IndexController extends Controller
{
    public function index(){
        return view('home/index');
    }

    public function studentemployment(){
        return view('home/studentemployment');
    }

    public function faculty(){
        return view('home/faculty');
    }

    public function StudentsStory(){
        return view('home/StudentsStory');
    }

    public function idea(){
        return view('home/idea');
    }

}

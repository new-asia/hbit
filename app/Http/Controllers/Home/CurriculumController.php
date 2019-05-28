<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class CurriculumController extends Controller
{
    public function java(){
        return view('home/java');
    }

    public function php(){
        return view('home/php');
    }

    public function html5(){
        return view('home/html5');
    }
}

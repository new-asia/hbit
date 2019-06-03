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
        return view('api/index');
    }
    public function employment(){
        $employment = new Student();
        $employment = $employment->Studentlist();
        return view('api/EmploymentInformation',['employment'=>$employment]);
    }
  
}

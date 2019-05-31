<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Advert;

class CurriculumController extends Controller
{
    public function __construct()
    {
        view()->composer('home.layouts.header','App\Http\Controllers\Home\NavController@header_nav');
    }
    public function java(){
        $advert = new Advert();
        $advert = $advert->getAdvert(4);
        //print_r();die;
        return view('home/java',['advert'=>$advert]);
    }

    public function php(){
        return view('home/php');
    }

    public function html5(){
        return view('home/html5');
    }
}

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//前台
Route::namespace('Home')->group(function () {
    //首页
    Route::get('/','IndexController@index');
    Route::get('/studentemployment', 'IndexController@studentemployment');
    Route::get('/faculty', 'IndexController@faculty');
    Route::get('/StudentsStory', 'IndexController@StudentsStory');
    Route::get('/faculty/teacher', 'IndexController@teacher');
    //课程
    Route::get('/java.html', 'CurriculumController@java');
    Route::get('/php.html', 'CurriculumController@php');
    Route::get('/html5.html', 'CurriculumController@html5');
    Route::get('/python.html', 'CurriculumController@python');
    //导航
    Route::get('/idea', 'NavController@idea');
    Route::get('/history', 'NavController@history');
    Route::get('/flow', 'NavController@flow');
    Route::get('/abouts', 'NavController@abouts');
    Route::get('/ClassInfomation', 'NavController@ClassInfomation');
    Route::get('nav/header_nav', 'NavController@header_nav');
    //文章
    Route::get('/show-{id}', 'ArticleController@show');
    Route::get('/Campusall', 'ArticleController@Campusall');
    //报名
    Route::post('/apply', 'EnrollController@apply');


    Route::get('/EmploymentInformation', 'IndexController@employmentInformation');
    Route::get('/phonebd', 'IndexController@phonebd');

});

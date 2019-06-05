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
    Route::get('/studentemployment.html', 'IndexController@studentemployment');
    Route::get('/faculty.html', 'IndexController@faculty');
    Route::get('/StudentsStory.html', 'IndexController@StudentsStory');
    Route::get('/faculty/teacher', 'IndexController@teacher');

    //课程
    Route::get('/java.html', 'CurriculumController@java');
    Route::get('/php.html', 'CurriculumController@php');
    Route::get('/html5.html', 'CurriculumController@html5');
    Route::get('/python.html', 'CurriculumController@python');
    //导航
    Route::get('/idea.html', 'NavController@idea');
    Route::get('/school.html', 'NavController@school');
    Route::get('/history.html', 'NavController@history');
    Route::get('/flow.html', 'NavController@flow');
    Route::get('/school.html', 'NavController@school');
    Route::get('/abouts.html', 'NavController@abouts');
    Route::get('/ClassInformation.html', 'NavController@ClassInfomation');
    Route::get('nav/header_nav', 'NavController@header_nav');
    //文章
    Route::get('/show-{id}.html', 'ArticleController@show');
    Route::get('/Campusall.html', 'ArticleController@Campusall');
    //报名
    Route::post('/apply/{url}', 'EnrollController@apply');


    Route::get('/EmploymentInformation.html', 'IndexController@employmentInformation');
    Route::get('/phonebd.html', 'IndexController@phonebd');

    //教师详情
    Route::get('/Faculty/show-{id}.html', 'FacultyController@show');
     //标签列表
    Route::get('/tags/show-{id}.html', 'TagsController@show');
    Route::get('/category/show-{id}.html', 'ArticleController@list');

    //学生
    Route::get('/StudentsStory/show-{id}.html', 'StudentController@show');
    Route::get('/Studentsdetails.html', 'StudentController@Studentsdetails');

    //文章分类 
    Route::get('/cat/show-{id}.html', 'ArticleController@cate_list');
});

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
    //课程
    Route::get('/java', 'CurriculumController@java');
    Route::get('/php', 'CurriculumController@php');
    Route::get('/html5', 'CurriculumController@html5');
    //导航
    Route::get('/idea', 'NavController@idea');
    Route::get('/history', 'NavController@history');
    Route::get('/flow', 'NavController@flow');
    Route::get('/abouts', 'NavController@abouts');
    Route::get('/ClassInfomation', 'NavController@ClassInfomation');
    //文章
    Route::get('/show', 'ArticleController@show');
    Route::get('/Campusall', 'ArticleController@Campusall');
});
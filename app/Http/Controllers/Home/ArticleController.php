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

class ArticleController extends Controller
{
    public function __construct()
    {
        view()->composer('home.layouts.header','App\Http\Controllers\Home\NavController@header_nav');
    }
    //文章内容
    public function show($id){
        if((int)$id <= 0) return view('error');
        $article = Article::where('is_show',1)->find($id);
        if(!$article) return view('error');
        $prevID = Article::prevID($id);
        $nextId = Article::nextId($id);
        if(empty($prevID)){
            $prev['article_id'] = 0;
            $prev['title'] = '已经是第一章';
        }else{
            $prev = Article::select('article_id','title')->find($prevID);
        }
        if(empty($nextId)){
            $next['title'] = '没有了';
            $next['article_id'] = 0;
        }else{
            $next = Article::select('article_id','title')->find($nextId);
        }
        $article['add_time'] = date('Y-m-d H:i:s',$article['add_time']);
        $article['reading_num'] = $article['reading_num'] + 1;
        if(!Article::where('article_id',$article['article_id'])->update(['reading_num'=>$article['reading_num']])) return 'Modification error';
        $tags_id = explode(',',$article['tags_id']);
        $relevant = Article::relevant($tags_id,$id);
        $Category = new Category();
        $list = $Category->ArticleList();
        $advert = new Advert();
        $advert = $advert->getAdvert(7);
        $course = new Course();
        $course = $course->course();
        $campus = Campus::getAllCampus();
        $courseall = Course::getAllCourse();
        $Tags =Tags::allcount();
        $recommend = Article::recommend();

        return view('home/show',['recommend'=>$recommend,'tags'=>$Tags,'article'=>$article,'prev'=>$prev,'next'=>$next,'relevant'=>$relevant,'list'=>$list,'advert'=>$advert,'courseall'=>$courseall,'course'=>$course,'campus'=>$campus]);
    }
    //文章列表
    
    public function Campusall(){
        $Category = new Category();
        $list = $Category->ArticleList();
        $advert = new Advert();
        $advert = $advert->getAdvert(7);
        $course = new Course();
        $course = $course->course();
        $campus = Campus::getAllCampus();
        $courseall = Course::getAllCourse();
        $recommend = Article::recommend();
        return view('home/Campusall',['recommend'=>$recommend,'list'=>$list,'advert'=>$advert,'courseall'=>$courseall,'course'=>$course,'campus'=>$campus]);
    }
}

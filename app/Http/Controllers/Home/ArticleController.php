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
        view()->composer('home.layouts.footer','App\Http\Controllers\Home\NavController@footer_link');
    }
    //文章内容
    public function show($id){

        if((int)$id <= 0) return view('error');


        $isMobile = $this->isMobile();

        if($isMobile){
            $A = new Article();
            $article = Article::where('is_show',1)->find($id);

            $article_list = $A->api_list($article->cid);
            return view('api/content',['article'=>$article,'article_list'=>$article_list]);
        }

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
        $list = $Category->ArticleList("Y-m-d H:i:s");
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
        $isMobile = $this->isMobile();
        $Category = new Category();
        $recommend = Article::recommend();
        if ($isMobile) {
            $Newest = Article::Newest();
            $list = $Category->ArticleList("Y-m-d H:i:s");
            return view('api/news',['Newest'=>$Newest,'list'=>$list,'recommend'=>$recommend]);
        } else {
            $advert = new Advert();
            $advert = $advert->getAdvert(7);
            $list = $Category->ArticleList("m月d日");
            $course = new Course();
            $course = $course->course();
            $campus = Campus::getAllCampus();
            $courseall = Course::getAllCourse();
            return view('home/Campusall',['recommend'=>$recommend,'list'=>$list,'advert'=>$advert,'courseall'=>$courseall,'course'=>$course,'campus'=>$campus]);
        }

    }

    public function list($id){
        if((int)$id <= 0) return view('error');
        
        $Article = new Article();
        $Article_list = $Article->getcategory($id);//分页  数据

        $advert = new Advert();
        $advert = $advert->getAdvert(7);//图片


        $course = new Course();
        $course = $course->course();//开课信息


        $campus = Campus::getAllCampus();//右侧校区下拉
        $courseall = Course::getAllCourse();//右侧课程下拉
        $Category =Category::find($id);//标签
    
        return view('home/category/show',['article'=>$Article_list,'Category'=>$Category,'advert'=>$advert,'courseall'=>$courseall,'course'=>$course,'campus'=>$campus]);
    }


    public function cate_list($id){
        if((int)$id <= 0) return view('error');
        $isMobile = $this->isMobile();
       
        if (!$isMobile) return view('error');
        $Article = new Article();
        $Article_list = $Article->getcategory($id,5,50);//分页  数据
        return view('api/cate_list',['article'=>$Article_list]);
    }
       
}

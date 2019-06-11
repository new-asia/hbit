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
use App\Models\Referrer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use DB;
class ArticleController extends Controller
{
    public function __construct()
    {
        view()->composer('home.layouts.header','App\Http\Controllers\Home\NavController@header_nav');
        view()->composer('home.layouts.footer','App\Http\Controllers\Home\NavController@footer_link');
    }
    //文章内容
    public function show($id,$rid=176){

        if((int)$id <= 0) return view('error');


        $isMobile = $this->isMobile();

        if($isMobile){
            $A = new Article();
            $article = Article::where('is_show',1)->find($id);

            $Referrer = new Referrer();
            $referrer = $Referrer->find($rid)->toArray();

            $article_list = $A->api_list($article->cid);
            $photos = explode(',',$referrer['photos']);
            return view('api/content',['article'=>$article,'photos'=>$photos,'referrer'=>$referrer,'article_list'=>$article_list]);
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
    public function uploads(Request $request){
        if ($request->isMethod('POST')) {
            $fileCharater = $request->file('file');
            if ($fileCharater->isValid()) {
                $originalName = $fileCharater->getClientOriginalName(); // 文件原名
                $ext = $fileCharater->getClientOriginalExtension();     // 扩展名
                $realPath = $fileCharater->getRealPath();   //临时文件的绝对路径
                $type = $fileCharater->getClientMimeType();     // image/jpeg
                $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
                // 使用我们新建的uploads本地存储空间（目录）
                //这里的uploads是配置文件的名称
                $bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));
                $code['code'] = 0;
                $code['url'] = '/upload/img/'.$filename;
                return json_encode($code);
            }
        }
    }
    public function infor(Request $request,$id,$cid){
        if($request->input()) {
            $post['photos'] = implode(",", $request->input('photos'));
            $post['name'] = $request->input('name');
            $post['tel'] = $request->input('tel');
            $post['headphoto'] = $request->input('headphoto');
            $Referrer = new Referrer();
            $Referrer->insert($post);
            $cid = DB::getPdo()->lastInsertId();
        }
        if ((int)$id <= 0) return view('error');
        //print_r($cid);die;
        $isMobile = $this->isMobile();

        if ($isMobile) {
            $A = new Article();
            $article = Article::where('is_show', 1)->find($id);

            $Referrer = new Referrer();
            if(empty($cid)){$cid = 178;}
            $referrer = $Referrer->find($cid)->toArray();

            $article_list = $A->api_list($article->cid);
            $photos = explode(',', $referrer['photos']);

            return view('api/infors', ['cid'=>$cid,'article' => $article, 'photos' => $photos, 'referrer' => $referrer, 'article_list' => $article_list]);
        }
    }
    public function infors(Request $request,$id,$cid){
        if($request->input()) {
            $post['photos'] = implode(",", $request->input('photos'));
            $post['name'] = $request->input('name');
            $post['tel'] = $request->input('tel');
            $post['headphoto'] = $request->input('headphoto');
            $Referrer = new Referrer();
            $Referrer->insert($post);
            $cid = DB::getPdo()->lastInsertId();
        }
        if ((int)$id <= 0) return view('error');
        //print_r($cid);die;
        $isMobile = $this->isMobile();

        if ($isMobile) {
            $A = new Article();
            $article = Article::where('is_show', 1)->find($id);

            $Referrer = new Referrer();
            $referrer = $Referrer->find($cid)->toArray();

            $article_list = $A->api_list($article->cid);
            $photos = explode(',', $referrer['photos']);
            return view('api/infores', ['cid' => $cid, 'article' => $article, 'photos' => $photos, 'referrer' => $referrer, 'article_list' => $article_list]);
        }
    }
}

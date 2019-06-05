<?php
/**
 * 教师表
 * Created by PhpStorm.
 * User: cy
 * Date: 2019/5/28
 * Time: 18:35
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Article extends Model
{
    protected $table = 'article';
    public $timestamps = false;
    public $primaryKey ="article_id";
    public static function prevID($id){
        return parent::where('article_id', '<', $id)->where('is_show',1)->max('article_id');
    }

    public static function nextId($id){
        return parent::where('article_id', '>', $id)->where('is_show',1)->min('article_id');
    }
    
    public function getall($id){
        $sql  = "(select * from `cmf_article` where is_show = 1 and find_in_set(".$id.",tags_id) order By list_order desc) as article ";
        $arr =DB::table(DB::raw($sql))->paginate(11);
        foreach($arr as $k=>$v){
            if(mb_strlen($v->content)>200){
                $newStr = mb_substr(strip_tags(str_replace('&nbsp;','',$v->content)),0,300,"UTF8")."...";
            }else{
                $newStr = $v->content; 
            }
            $v->content = $newStr;
        }
        return $arr;
    }
    public function getcategory($id,$limit = 11,$size = 200){
        $sql  = "(select * from `cmf_article` where is_show = 1 and cid = ".$id." order By list_order desc) as article ";
        $arr =DB::table(DB::raw($sql))->paginate($limit);
        foreach($arr as $k=>$v){
            if(mb_strlen($v->content)>$size){
                $newStr = mb_substr(strip_tags(str_replace('&nbsp;','',$v->content)),0,300,"UTF8")."...";
            }else{
                $newStr = $v->content; 
            }
            $v->content = $newStr;
        }
        return $arr;
    }


    public static function relevant($tags_id,$id){
        $relevant = parent::whereIn('tags_id',$tags_id)
            ->where('is_show',1)
            ->where('article_id','!=',$id)
            ->select('img','article_id','title','content','add_time')
            ->orderBy('add_time','desc')
            ->limit(4)
            ->get();
        foreach ($relevant as $v){
            $v['add_time'] = date('Y-m-d H:i:s',$v['add_time']);
           
            $content = str_replace(array("&nbsp;","&amp;nbsp;","\t","\r\n","\r","\n"),array("","","","","",""),strip_tags($v['content']));
            $v['content'] = htmlspecialchars(strip_tags($content));
        }

        return $relevant;
    }

    public static function recommend(){
        return parent::where('is_show',1)->orderBy('reading_num','desc')->select('reading_num','article_id','title')->get();
    }

    public static function Newest(){
        $res = parent::where('is_show',1)->orderBy('add_time','desc')->select('article_id','title','img','add_time','content')->get();
        foreach ($res as $v){
            $v['add_time'] = date('m-d',$v['add_time']);
        }
        return $res;
    }
    public function getArticleSelect(){
        $data = DB::table('article_c')
        ->orderBy('list_order','desc')
        ->take(3)
        ->get();

        foreach($data as $k => $v){
            $arr = [];
            for($a = 1; $a <= 2;$a++){
                $arr[] = DB::table('article')->where('is_show',1)
                ->where('cid',$v->cid)
                ->orderBy('list_order','desc')
                ->skip(4 * ($a -1))
                ->take(4)
                ->select("article_id","title","img")
                ->get();
               
            }
            if($k == 0){
                $v->display = "block";
            }else{
                $v->display = "none";
            }
            $v->list = $arr;
            
        }
        return $data;
    }
    public function art_list($c_id){
        return DB::table('article')
            ->where('cid',$c_id)
            ->orderBy('list_order','desc')
            ->limit(8)
            ->select('title','article_id')
            ->get();
    }
    public function api_list($c_id){
        return DB::table('article')
            ->where('cid',$c_id)
            ->orderBy('add_time','desc')
            ->limit(5)
            ->select('title',"add_time",'article_id')
            ->get();
    }
}

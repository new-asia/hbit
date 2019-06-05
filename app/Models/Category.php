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
class Category extends Model
{
    protected $table = 'article_c';
    public $timestamps = false;
    public $primaryKey ="cid";
   
    public function ArticleList($datestr){
        $data = $this->get();
        $article_arr = [];
        foreach($data as $k => $v){
            $article_arr[$k][] = $v;
            $arr  = DB::table("article")->where("cid",$v->cid)->orderBy('list_order')->limit(4)->get();

            if(!empty( $arr)){
                foreach($arr as $key => $val){
                    $val->content = $this->subtext(strip_tags($val->content),40);
                    $val->add_time = date($datestr,$val->add_time);
                    $val->reading_num = (int)$val->reading_num;
                    $article_arr[$k][] = $val;
                }
            }
            
        }

        return $article_arr;
    }
    public function subtext($text, $length)
    {
        if(mb_strlen($text, 'utf8') > $length) {
            return mb_substr($text, 0, $length, 'utf8').'...';
        } else {
            return $text;
        }
    
    }
 
}

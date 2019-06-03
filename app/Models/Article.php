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
            $v['content'] = htmlspecialchars($v['content']);
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
}

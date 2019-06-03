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
class Tags extends Model
{
    protected $table = 'article_tags';
    public $timestamps = false;
    public $primaryKey ="id";

    public static function allcount(){
        $arr = parent::all()->toArray();
        foreach($arr as $k=> $v){
            $count_order = DB::select("select count(*) as count_order  from `cmf_article` where is_show = 1 and find_in_set(".$v['id'].",tags_id)");    
            
            $order = DB::table('article')
            ->select(DB::raw('count(*) as count_order'))
            ->where(['tags_id' =>$v['id'] ])->get()->toArray();
            $arr[$k]['count'] = $count_order[0]->count_order;
          }
        return $arr;
    }
}

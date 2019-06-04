<?php
/**
 * 广告表
 * Created by PhpStorm.
 * User: cy
 * Date: 2019/5/28
 * Time: 18:35
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Advert extends Model
{
    protected $table = 'picture';
    public $timestamps = false;
    public $primaryKey ="picture_id";
    public function getAdvert($modular){
        return DB::table('picture')
            ->where('status',1)
            ->where('is_advert',1)
            ->where('modular',$modular)
            ->select('picture_src','picture_place','picture_url')
            ->get();
        //print_r();die;
    }
    public function rotation_chart(){
        return DB::table('picture')
            ->where('status',1)
            ->where('is_advert',0)
            ->where('is_api',0)
            ->select('picture_src','picture_place','picture_url')
            ->get();
    }
    public function api_chart(){
        return DB::table('picture')
            ->where('status',1)
            ->where('is_advert',0)
            ->where('is_api',1)
            ->select('picture_src','picture_place','picture_url')
            ->get();
    }
}
<?php
/**
 * 友情链接表
 * Created by PhpStorm.
 * User: cy
 * Date: 2019/5/28
 * Time: 18:35
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Link extends Model
{
    protected $table = 'link';
    public $timestamps = false;
    public $primaryKey ="id";
    public function getLink(){
        return DB::table('link')
            ->where('status',1)
            ->select('name','url')
            ->get();
    }
    public function getoption(){
        $option = DB::table('option')
            ->where('option_name','site_info')
            ->select('option_value')
            ->get();
        return json_decode($option);
    }
}
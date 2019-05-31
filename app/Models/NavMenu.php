<?php
/**
 * 课程表
 * Created by PhpStorm.
 * User: cy
 * Date: 2019/5/28
 * Time: 18:35
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class NavMenu extends Model
{
    protected $table = 'nav_menu';
    public $timestamps = false;
    public $primaryKey ="id";
    public function nav_list(){
        return DB::table('nav_menu')
            ->where('nav_id','=','3')
            ->where('status','=','1')
            ->select('name','href')
            ->get();
    }
}
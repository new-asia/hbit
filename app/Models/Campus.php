<?php
/**
 * 校区
 * Created by PhpStorm.
 * User: cy
 * Date: 2019/5/28
 * Time: 18:35
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Campus extends Model
{
    protected $table = 'campus';
    public $timestamps = false;
    public static function getAllCampus(){
        return parent::where('is_show',1)->select('id','campus')->get();
    }
}

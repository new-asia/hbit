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
class Course extends Model
{
    protected $table = 'course';
    public $timestamps = false;
    public $primaryKey ="course_id";
    public static function getAllCourse(){
        return parent::select('course_id','course_name')->get();
    }
}

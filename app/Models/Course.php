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
    public function course(){
        return DB::table('course')
            ->select('course_name','enroll_link','course_num','course_time')
            ->offset(0)
            ->limit(9)
            ->get();
        //print_r();die;
    }
    public function cou_index(){
        return DB::table('course')
            ->select('course_name','enroll_link','course_form','outline_link','course_num','course_time')
            ->offset(0)
            ->limit(5)
            ->get();
    }
}

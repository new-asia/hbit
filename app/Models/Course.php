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
            ->select('course_name','enroll_link','list_order','course_time')
            ->get();
        //print_r();die;
    }
}
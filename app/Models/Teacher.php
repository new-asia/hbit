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
class Teacher extends Model
{
    protected $table = 'teacher';
    public $timestamps = false;
    public $primaryKey ="teacher_id";
    public function getTeacher(){
        return DB::table('teacher')
            ->leftjoin('position','position.position_id','=','teacher.position_id')
            ->orderBy('list_order')
            ->select('teacher_id','details', 'name','position_name','teacher_portrait_src','obtain_employment_time','teacher_style','field')
            ->get();
    }
    public function getTeacherLimit($limit){
        return DB::table('teacher')
            ->leftjoin('position','position.position_id','=','teacher.position_id')
            -> orderBy('list_order')
            -> take($limit)
            ->select('teacher_id', 'name','position_name','teacher_portrait_src','details')
            ->get();
    }

    public static function one($id){
        return DB::table('teacher')
            ->leftjoin('position','position.position_id','=','teacher.position_id')
            ->where('teacher_id',$id)
            ->take(1)
            ->select('teacher_id', 'name','position_name','teacher_portrait_src','details','obtain_employment_time','field','experience','teacher_style')
            ->get();
    }
    public function getpyTeacher($id){
        return DB::table('teacher')
            ->leftjoin('position','position.position_id','=','teacher.position_id')
            ->where('position.position_id',$id)
            ->orderBy('list_order')
            ->select('teacher_id','details', 'name','position_name','teacher_portrait_src')
            ->get();
    }
    public function getTeacherLimits($limit,$sum){
        for($a = 1; $a <= $sum;$a++) {
            $data = DB::table('teacher')
                ->leftjoin('position', 'position.position_id', '=', 'teacher.position_id')
                ->orderBy('list_order','desc')
                ->skip(6 * ($a-1))
                ->take($limit)
                ->select('teacher_id', 'name', 'position_name', 'teacher_portrait_src', 'details')
                ->get()
                ->toArray();
            //echo $a;
            $data_arr[]=$data;
        }
        return $data_arr;
    }

}

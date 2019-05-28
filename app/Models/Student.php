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
class Student extends Model
{
    protected $table = 'student';
    public $timestamps = false;
    public $primaryKey ="student_id";
    public function getStudent(){
        return DB::table('student')
            ->leftjoin('class','class.class_id','=','student.class_id')
            ->where('is_graduate',1)
            ->select('student_id', 'name','class_name','pay','testimonials','img')
            ->get();

    }

    public function getStudentLimit($limit){
        return DB::table('student')
            ->leftjoin('class','class.class_id','=','student.class_id')
            ->where('is_graduate',1)
            -> orderBy('list_order','desc')
            -> take($limit)
            ->select('student_id', 'name','class_name','pay','testimonials','img')
            ->get();
    }
}

<?php
/**
 * 学生表
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
            ->paginate(8);
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
    public function getStudentSelect($limit = 4,$sum = 1,$select = ""){
        $sql = ['student_id','name','class_name','pay','img',"company"];
        if(strstr($select,",")){
            $sql = [ ];
            $arr = explode($select,",");
            foreach($arr as $v){
                $sql[] = $v;
            }
        }
        for($a = 1; $a <= $sum;$a++){
            $str_arr = DB::table('student')->leftjoin('class','class.class_id','=','student.class_id')->where('is_graduate',1)
            ->orderBy('list_order','desc')
            ->skip(4 * ($a-1))
            ->take($limit)
            ->select($sql)
            ->get()
            ->toArray();
            foreach ($str_arr as $v){
                $strlen     = mb_strlen($v->name, 'utf-8');
                $firstStr     = mb_substr($v->name, 0, 1, 'utf-8');
                $lastStr     = mb_substr($v->name, -1, 1, 'utf-8');
                $v->name = $strlen == 2 ? $firstStr . str_repeat('*', mb_strlen($v->name, 'utf-8') - 1) : $firstStr . str_repeat("*", $strlen - 2) . $lastStr;
             }
             $data[] = $str_arr;
        }
        
        return $data;
    }
    public function Studentlist($limit){
        return DB::table('student')
            ->leftjoin('class','class.class_id','=','student.class_id')
            ->where('is_graduate',1)
            ->select('student_id', 'name','class_name','pay','company')
            ->paginate($limit);
    }
}

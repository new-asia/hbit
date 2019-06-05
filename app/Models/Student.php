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
    public function getStudentPage($page){
        $res = DB::table('student')
            ->leftjoin('class','class.class_id','=','student.class_id')
            ->where('is_graduate',1)
            ->select('student_id', 'name','class_name','pay','testimonials','img')
            ->paginate(8,$columns = ['*'], $pageName = '', $page);
        foreach ($res as $v){
            $v->name = self::substr_cut($v->name);
        }
        return $res;
    }
    public function MaxPage(){
        $num = parent::leftjoin('class','class.class_id','=','student.class_id')
            ->where('is_graduate',1)
            ->count();
        return ceil($num/8);
    }
    public static function prevID($id){
        return parent::where('student_id', '<', $id)->where('is_graduate',1)->max('student_id');
    }

    public static function nextId($id){
        return parent::where('student_id', '>', $id)->where('is_graduate',1)->min('student_id');
    }
    public function getStudentLimit($limit){
        $res = DB::table('student')
            ->leftjoin('class','class.class_id','=','student.class_id')
            ->where('is_graduate',1)
            -> orderBy('list_order','desc')
            -> take($limit)
            ->select('student_id', 'name','class_name','pay','testimonials','img')
            ->get();
        foreach ($res as $v){
            $v->name = self::substr_cut($v->name);
        }
        return $res;
    }
    public function getStudentSelect($limit = 4,$sum = 1,$select = ""){
        $sql = ['student_id','name','class_name','pay','img',"company"];
        if(strstr($select,",")){
            $sql = [ ];
            $arr = explode($select,",");
            foreach($arr as $res){
                $sql[] = $res;
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
            foreach ($str_arr as $res){
                $strlen     = mb_strlen($res->name, 'utf-8');
                $firstStr     = mb_substr($res->name, 0, 1, 'utf-8');
                $lastStr     = mb_substr($res->name, -1, 1, 'utf-8');
                $res->name = $strlen == 2 ? $firstStr . str_repeat('*', mb_strlen($res->name, 'utf-8') - 1) : $firstStr . str_repeat("*", $strlen - 2) . $lastStr;
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
    public function Studentfind($id){
        return DB::table('student')
            ->leftjoin('class','class.class_id','=','student.class_id')
            ->where('is_graduate',1)
            ->where('student_id',$id)
            ->select('student_id', 'name','class_name','pay','company','testimonials','sex')
            ->get();
    }

    public static function studentOne($id){
        $res = DB::table('student')->where('student_id',$id)->first();
        $res->graduate_time = date('Y-m-d H:i:s',$res->graduate_time);
        $res->name = self::substr_cut($res->name);
        return $res;
    }
    public static function substr_cut($user_name){
        $strlen     = mb_strlen($user_name, 'utf-8');
        $firstStr     = mb_substr($user_name, 0, 1, 'utf-8');
        $lastStr     = mb_substr($user_name, -1, 1, 'utf-8');
        return $strlen == 2 ? $firstStr . str_repeat('*', mb_strlen($user_name, 'utf-8') - 1) : $firstStr . str_repeat("*", $strlen - 2) . $lastStr;
    }
}

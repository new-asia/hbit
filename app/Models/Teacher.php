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
            ->select('teacher_id', 'name','position_name','teacher_portrait_src','obtain_employment_time','teacher_style','field')
            ->get();
    }
}

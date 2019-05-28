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

}

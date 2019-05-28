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

}

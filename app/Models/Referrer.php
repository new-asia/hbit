<?php
/**
 * 文章转载人修改model
 * Created by PhpStorm.
 * User: cy
 * Date: 2019/5/28
 * Time: 18:35
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Referrer extends Model
{
    protected $table = 'referrer';
    public $timestamps = false;

}

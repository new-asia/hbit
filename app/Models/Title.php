<?php
/**
 * 标题表
 * Created by PhpStorm.
 * User: cy
 * Date: 2019/5/28
 * Time: 18:35
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Title extends Model
{
    protected $table = 'title';
    public $timestamps = false;
    public $primaryKey ="t_id";
    public function title_list($id){
        return DB::table('title')
            ->where('n_id','=',$id)
            ->select('title')
            ->get();
    }
}
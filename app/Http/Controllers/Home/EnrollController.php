<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Enroll;
class EnrollController extends Controller
{
    public function apply(Request $request){
        $post = $request->input();
        //判断传过来的时候是POST方法
        if(!$request->isMethod('POST')){
            return redirect()->back();
        }
        $validator = \Validator::make($post,[
            'name'=>'required|min:2|max:20',
            'tel'=>'required|integer|digits:11',
            'qq'=>'required|integer|digits_between:5,11',
            'campus_id'=>'required|min:1',
            'course_id'=>'required|min:1',
        ],[
            'required'=>':attribute 为必填项',
            'min'=>':attribute 长度不符合要求',
            'max'=>':attribute 长度超出范围',
            'integer'=>':attribute 必须是整形',
            'digits_between'=>':attribute 长度不符合要求',
            'digits'=>':attribute 长度不符合要求'

        ],[
            'name'=>'姓名',
            'tel'=>'手机号 ',
            'qq'=>'QQ号',
            'campus_id'=>'校区',
            'course_id'=>'课程',
        ]);

        if ($validator->fails()) {
           return redirect()->back()->withErrors($validator)->withInput();
        }

        $enroll = new Enroll();
        unset($post['_token']);
        if(!$enroll->insert($post)){
            return redirect()->back()->with('message', '报名失败');
        }
        return redirect('faculty')->with('message', '报名成功');
    }
}

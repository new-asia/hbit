<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2019/6/4
 * Time: 21:18
 */
<<<<<<< HEAD
        $course = new Course();
        $course = $course->course();

        $advert = new Advert();
        $advert = $advert->getAdvert(1);
        $campus = Campus::getAllCampus();
        $courseall = Course::getAllCourse();
        $tid = array();
        $relevant = Article::relevant($tid,$id);
        $prevID = Student::prevID($id);
        $nextId = Student::nextId($id);
        if(empty($prevID)){
            $prev['student_id'] = 0;
            $prev['name'] = '已经是第一位';
        }else{
            $prev = Student::select('student_id','name')->find($prevID);
            $strlen     = mb_strlen($prev['name'], 'utf-8');
            $firstStr     = mb_substr($prev['name'], 0, 1, 'utf-8');
            $lastStr     = mb_substr($prev['name'], -1, 1, 'utf-8');
            $prev['name'] = $strlen == 2 ? $firstStr . str_repeat('*', mb_strlen($prev['name'], 'utf-8') - 1) : $firstStr . str_repeat("*", $strlen - 2) . $lastStr;
        }
        if(empty($nextId)){
            $next['name'] = '没有了';
            $next['student_id'] = 0;
        }else{
            $next = Student::select('student_id','name')->find($nextId);
            $strlen     = mb_strlen($next['name'], 'utf-8');
            $firstStr     = mb_substr($next['name'], 0, 1, 'utf-8');
            $lastStr     = mb_substr($next['name'], -1, 1, 'utf-8');
            $next['name'] = $strlen == 2 ? $firstStr . str_repeat('*', mb_strlen($next['name'], 'utf-8') - 1) : $firstStr . str_repeat("*", $strlen - 2) . $lastStr;
        }
        foreach ($Studentfind as $v){
            $strlen     = mb_strlen($v->name, 'utf-8');
            $firstStr     = mb_substr($v->name, 0, 1, 'utf-8');
            $lastStr     = mb_substr($v->name, -1, 1, 'utf-8');
            $v->name = $strlen == 2 ? $firstStr . str_repeat('*', mb_strlen($v->name, 'utf-8') - 1) : $firstStr . str_repeat("*", $strlen - 2) . $lastStr;
        }
        //print_r($Studentfind);die;
        return view("home/studentsdetails",['relevant'=>$relevant,'next'=>$next,'prev'=>$prev,'studentfind'=>$Studentfind,'courseall'=>$courseall,'Tags'=>$Tags,'course'=>$course,'advert'=>$advert,'campus'=>$campus]);
    }
=======
>>>>>>> 4a5bb7219c291d2924c6af5a727eeefa9274011d
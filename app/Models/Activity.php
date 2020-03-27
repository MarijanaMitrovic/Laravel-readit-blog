<?php
/**
 * Created by PhpStorm.
 * User: Marijana
 * Date: 26.3.2020.
 * Time: 23.59
 */

namespace App\Models;


class Activity
{

    public $activity_content;
    public $usermail;

    public function getAll(){
        return \DB::table('activity')
            ->orderBy('time','desc')
            ->paginate(10);
    }


    public function addActivity(){
        return \DB::table('activity')
            ->insertGetId([
                "activity_content"=>$this->activity_content,
                "usermail"=>$this->usermail,
                "time"=>date("Y:m:d H:i:s")
            ]);
    }

    public function getForDate($time){
        return \DB::table('activity')
            ->where("time","like","%".$time."%")
            ->get();
    }


}
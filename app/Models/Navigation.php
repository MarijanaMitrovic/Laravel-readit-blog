<?php
/**
 * Created by PhpStorm.
 * User: Marijana
 * Date: 16.3.2020.
 * Time: 19.45
 */

namespace App\Models;


 class Navigation
{
    public function getMenuItems(){
        return \DB::table("menu")
            ->orderBy('position', 'asc')
            ->get();
    }


}
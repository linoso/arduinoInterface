<?php
/**
 * Created by PhpStorm.
 * User: Lino
 * Date: 14/08/14
 * Time: 8:22 PM
 */

namespace library;


class Time {

    static $currentTime = null;

    public static function getTime(){
        if(is_null(self::$currentTime)){
            self::$currentTime=time();
        }
        return self::$currentTime;
    }

    public static function getMonthInNumber(){
        return date('m',self::getTime());
    }
} 
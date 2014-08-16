<?php
/**
 * Created by PhpStorm.
 * User: Lino
 * Date: 14/08/14
 * Time: 8:22 PM
 */

namespace library;


class Time {

    /**
     * @var int|null
     */
    static private $currentTime = null;
    /**
     * @var int|null
     */
    private $time = null;

    const SECOND_IN_A_DAY = 86400;

    /**
     * @param null $time
     */
    function __construct($time= null)
    {
        if(is_null($time)){
         $time = self::getCurrentTime();
        }
        $this->time = $time;
    }

    /**
     * @param null $currentTime
     */
    public static function setCurrentTime($currentTime)
    {
        self::$currentTime = $currentTime;
    }


    /**
     * @return int|null
     */
    public static function getCurrentTime(){
        if(is_null(self::$currentTime)){
            self::$currentTime=time();
        }
        return self::$currentTime;
    }

    /**
     * @return null
     */
    function getTime(){
        return $this->time;
    }

    /**
     * @return bool|string
     */
    public function getMonthInNumber(){
        return date('m',self::getTime());
    }

    /**
     * @param string $string
     * @return bool|string
     */
    public function getFromattedDate($string = ''){
        return date($string,self::getTime());
    }

    /**
     * @return Time
     */
    public function getYesterday()
    {
        return new  Time(self::getCurrentTime()- self::SECOND_IN_A_DAY);
    }


} 
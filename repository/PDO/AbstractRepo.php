<?php
/**
 * Created by PhpStorm.
 * User: Lino
 * Date: 13/08/14
 * Time: 8:09 PM
 */

namespace repository\PDO;


abstract class AbstractRepo {
    /**
     * @var \PDO
     */
    static public $dbConnection = null;
    /**
     * @var array
     */
    private $results;

    function __construct()
    {
        if(is_null(self::$dbConnection)){
            try{
                self::$dbConnection =  new \PDO('localhost','stirling','genoa');
            } catch (\Exception $e){
                print_r($e);
                die();
            }
        }
    }

    function query($string)
    {
        $this->results = self::$dbConnection->query($string);
    }

    function  getRow()
    {
        array_shift($this->results);
    }


} 
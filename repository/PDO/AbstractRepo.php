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

    /**
     * @param Query $string
     * @return array[array]
     */
    function query($string)
    {
        $this->results = self::$dbConnection->query($string);
        return  $this->results;

    }

    /**
     * @return array
     */
    function  getRow()
    {
       return array_shift($this->results);
    }


} 
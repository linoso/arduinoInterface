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
        $dsn = 'mysql:host=192.168.0.103;dbname=StirlingDatasets';
        $username = 'stirling';
        $password = 'genoa';

        if(is_null(self::$dbConnection)){
            try{
                self::$dbConnection =  new \PDO($dsn,$username,$password);
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
        $this->results = self::$dbConnection->query($string)->fetchAll() ;
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
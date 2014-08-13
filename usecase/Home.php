<?php
/**
 * Created by PhpStorm.
 * User: Lino
 * Date: 10/08/14
 * Time: 3:09 PM
 */
namespace usecase;
use repository;
use domain;
use library;
class Home implements UseCase {

    public $todaysMesure = array();
    /** @var domain\Measurement */
    public $lastMesure = null;

    function __construct()
    {
        $repo  = new repository\memory\Measurement();
        $array = Home::prepareDateFake();
        $repo->insertCollections($array);
        library\Dic::$_repo =  array('Measurement' => $repo);
    }


    function prepare()
    {
        /**@type $repo repository\Measurement **/
        $repo =  library\Dic::getRepository('Measurement');
        $this->todaysMesure = $repo->getTodaysCollection();
        $this->lastMesure= current($this->todaysMesure);

    }

    function display()
    {
        include(APPLICATON_PATH.DIRECTORY_SEPARATOR.'template'.DIRECTORY_SEPARATOR.'index.tpl.php');
    }

    /**
     * @return array
     */
    public static function prepareDateFake()
    {
        $dom1 = new domain\Measurement('1', '1', '1', '1', '1', '1', '1', '1');
        $dom2 = new domain\Measurement('2', '2', '2', '2', '2', '2', '2', '2');
        return  array($dom1, $dom2);
    }
} 
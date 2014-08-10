<?php
/**
 * Created by PhpStorm.
 * User: Lino
 * Date: 10/08/14
 * Time: 3:09 PM
 */
namespace usecase;
use repository;
use library;
class Home implements UseCase {

    public $todaysMesure = array();

    function prepare()
    {
        /**@type $repo Measurement **/
        $repo =  Dic::getRepository('mesurament');
        $this->todaysMesure = $repo->getTodaysCollection();

    }

    function display()
    {
        // TODO: Implement display() method.
    }

} 
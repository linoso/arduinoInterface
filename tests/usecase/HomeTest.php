<?php
/**
 * Created by PhpStorm.
 * User: Lino
 * Date: 10/08/14
 * Time: 5:44 PM
 */
namespace usecase;
use library;
use domain;
class HomeTest extends \PHPUnit_Framework_TestCase {

    public function testPrepare()
    {
        $repo  = new \repository\memory\Measurement();
        $array = array(new domain\Measurement('1','1','1','1','1','1','1'));
        $repo->insertCollections($array);
        library\Dic::$_repo = array("mesurament" => array('Measurement' => $repo));
        $sut = new Home;
        $sut->prepare();


    }
}
 
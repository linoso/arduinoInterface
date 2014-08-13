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
        $array = $this->prepareDateFake();
        $repo->insertCollections($array);
        library\Dic::$_repo =  array('Measurement' => $repo);
        $sut = new Home;
        $sut->prepare();
        $actual = $sut->lastMesure;
        $this->assertEquals(current($array),$actual);

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
 
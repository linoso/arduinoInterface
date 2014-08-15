<?php
/**
 * Created by PhpStorm.
 * User: Lino
 * Date: 14/08/14
 * Time: 8:47 PM
 */

class MeasurementTest extends PHPUnit_Framework_TestCase {


    public function testReturnSuccesfullThreeRows()
    {
        \repository\PDO\Measurement::$dbConnection=new FakePdo($this);
        $sut = new \repository\PDO\Measurement();
        $sut->getTodaysCollection();

    }
}

class FakePdo
{
    /**
     * @var PHPUnit_Framework_TestCase
     */
    public $phpUnit = null;
    function __construct(PHPUnit_Framework_TestCase $phpUnit)
    {
        $this->phpUnit =  $phpUnit;
    }

    public function query($string){
        $this->phpUnit->assertEquals('SELECT *  FROM dataset_201401 where time > \'2014-08-20 00:00:00\'',$string);
        $return = array(
            array('volt' => 1 ,'ampere' => 1,  'temp1' => 1 , 'temp2' => 2, 'temp3' => 3, 'temp4' => 4, 'bar' => 5,  'id' => 1 , 'time' => '2014-05-12 00:00:00'),
            array('volt' => 2 ,'ampere' => 1,  'temp1' => 1 , 'temp2' => 2, 'temp3' => 3, 'temp4' => 4, 'bar' => 5,  'id' => 2 , 'time' => '2014-05-12 00:00:01'),
            array('volt' => 3 ,'ampere' => 1,  'temp1' => 1 , 'temp2' => 2, 'temp3' => 3, 'temp4' => 4, 'bar' => 5,  'id' => 3 , 'time' => '2014-05-12 00:00:02'),
        );
    }


}
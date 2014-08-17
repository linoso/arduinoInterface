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
        date_default_timezone_set('America/Toronto');
        \library\Time::setCurrentTime(strtotime('2014-08-16 00:00:00'));
        $pdo = new FakePdo($this);
        \repository\PDO\Measurement::$dbConnection= $pdo;
        $sut = new \repository\PDO\Measurement();
        $return = $sut->getTodaysCollection();
        $expected = array();
        foreach($pdo->generateDate() as $row){
            $expected[] = new \domain\Measurement($row['ampere'],$row['bar'],$row['temp1'],$row['temp2'],$row{'temp3'},$row['temp4'],$row['volt'],$row['time']);
        }
        $this->assertEquals($expected, $return);
    }

    public function _testReturnSuccesfullConnectingDB()
    {
        date_default_timezone_set('America/Toronto');
        \library\Time::setCurrentTime(strtotime('2014-08-16 00:00:00'));
        \repository\PDO\Measurement::$dbConnection= null;
        $sut = new \repository\PDO\Measurement();
        $return = $sut->getTodaysCollection();


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
        $this->phpUnit->assertEquals('SELECT *  FROM dataset_201408 where time > \'2014-08-15 00:00:00\'',$string);
        $return = new FakePdoStatement();
        return $return;
    }


    /**
     * @return array
     */
    public function generateDate()
    {
        $return = array(
            array('volt' => 1, 'ampere' => 1, 'temp1' => 1, 'temp2' => 2, 'temp3' => 3, 'temp4' => 4, 'bar' => 5, 'id' => 1, 'time' => '2014-05-12 00:00:00'),
            array('volt' => 2, 'ampere' => 1, 'temp1' => 1, 'temp2' => 2, 'temp3' => 3, 'temp4' => 4, 'bar' => 5, 'id' => 2, 'time' => '2014-05-12 00:00:01'),
            array('volt' => 3, 'ampere' => 1, 'temp1' => 1, 'temp2' => 2, 'temp3' => 3, 'temp4' => 4, 'bar' => 5, 'id' => 3, 'time' => '2014-05-12 00:00:02'),
        );
        return $return;
    }


}

class FakePdoStatement{
    function fetchAll(){
        $return = array(
            array('volt' => 1, 'ampere' => 1, 'temp1' => 1, 'temp2' => 2, 'temp3' => 3, 'temp4' => 4, 'bar' => 5, 'id' => 1, 'time' => '2014-05-12 00:00:00'),
            array('volt' => 2, 'ampere' => 1, 'temp1' => 1, 'temp2' => 2, 'temp3' => 3, 'temp4' => 4, 'bar' => 5, 'id' => 2, 'time' => '2014-05-12 00:00:01'),
            array('volt' => 3, 'ampere' => 1, 'temp1' => 1, 'temp2' => 2, 'temp3' => 3, 'temp4' => 4, 'bar' => 5, 'id' => 3, 'time' => '2014-05-12 00:00:02'),
        );
        return $return;
    }
}
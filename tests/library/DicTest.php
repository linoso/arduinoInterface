<?php
namespace library;
use repository\PDO;
/**
 * Created by PhpStorm.
 * User: Lino
 * Date: 16/08/14
 * Time: 6:55 PM
 */

class DicTest extends \PHPUnit_Framework_TestCase {




    public function testCreateMearuseRepo()
    {
        $pdo = new \FakePdo($this);
        \repository\PDO\Measurement::$dbConnection= $pdo;
        $this->assertInstanceOf('repository\PDO\Measurement', Dic::getRepository());
    }
}

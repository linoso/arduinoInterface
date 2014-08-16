<?php
/**
 * Created by PhpStorm.
 * User: Lino
 * Date: 14/08/14
 * Time: 8:17 PM
 */

namespace repository\PDO;
use library;

class Measurement extends AbstractRepo implements \repository\Measurement {

    const DATE_FORMAT = 'Y-m-d H:i:s';
    const TABLE_SUFFIX = 'Ym';
    public $tableBaseName = 'dataset_';

    public function getTodaysCollection()
    {
        $date = new library\Time();
        $date = $date->getYesterday();
        $dateString = $date->getFromattedDate(self::DATE_FORMAT);
        $suffix = $date->getFromattedDate(self::TABLE_SUFFIX);
        $result = $this->query("SELECT *  FROM dataset_$suffix where time > '$dateString'");
        return  $result;
    }

} 
<?php
/**
 * Created by PhpStorm.
 * User: Lino
 * Date: 14/08/14
 * Time: 8:17 PM
 */

namespace repository\PDO;


class Measurement extends AbstractRepo implements \repository\Measurement {

    public $tableBaseName = 'dataset_';

    public function getTodaysCollection()
    {

    }

} 
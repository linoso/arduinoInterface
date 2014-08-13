<?php
/**
 * Created by PhpStorm.
 * User: Lino
 * Date: 12/08/14
 * Time: 8:28 PM
 */

namespace repository\memory;


class Measurement implements \repository\Measurement {

    public $collections = array();

    public function getTodaysCollection() {
        return $this->collections;
    }
    public function insertCollections($array){
        $this->collections = $array;
    }
}
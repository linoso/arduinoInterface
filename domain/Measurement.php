<?php
/**
 * Created by PhpStorm.
 * User: Lino
 * Date: 10/08/14
 * Time: 5:33 PM
 */
namespace domain;

class Measurement {


    private $temp1;
    private $temp2;
    private $temp3;
    private $temp4;
    private $current;
    private $voltage;
    private $pressure;

    function __construct($current, $pressure, $temp1, $temp2, $temp3, $temp4, $voltage)
    {
        $this->current = $current;
        $this->pressure = $pressure;
        $this->temp1 = $temp1;
        $this->temp2 = $temp2;
        $this->temp3 = $temp3;
        $this->temp4 = $temp4;
        $this->voltage = $voltage;
    }


    /**
     * @param mixed $current
     */
    public function setCurrent($current)
    {
        $this->current = $current;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * @param mixed $pressure
     */
    public function setPressure($pressure)
    {
        $this->pressure = $pressure;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPressure()
    {
        return $this->pressure;
    }

    /**
     * @param mixed $temp1
     */
    public function setTemp1($temp1)
    {
        $this->temp1 = $temp1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTemp1()
    {
        return $this->temp1;
    }

    /**
     * @param mixed $temp2
     */
    public function setTemp2($temp2)
    {
        $this->temp2 = $temp2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTemp2()
    {
        return $this->temp2;
    }

    /**
     * @param mixed $temp3
     */
    public function setTemp3($temp3)
    {
        $this->temp3 = $temp3;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTemp3()
    {
        return $this->temp3;
    }

    /**
     * @param mixed $temp4
     */
    public function setTemp4($temp4)
    {
        $this->temp4 = $temp4;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTemp4()
    {
        return $this->temp4;
    }

    /**
     * @param mixed $voltage
     */
    public function setVoltage($voltage)
    {
        $this->voltage = $voltage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVoltage()
    {
        return $this->voltage;
    }

    /**
     * @return int
     */
    public function getPower()
    {
        return $this->getVoltage()*$this->getPressure();
    }
}
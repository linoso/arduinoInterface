<?php
/**
 * Created by PhpStorm.
 * User: Lino
 * Date: 10/08/14
 * Time: 2:53 PM
 */
namespace library;
use usecase;
use repository;

class Dic {

    static public $_usecase = array();
    static public $_repo = array();

    /**
     * @param $path
     * @return UseCase
     */
    public static function getUseCase($path = "index")
    {
        $classCache = self::$_usecase;
        $usecase = self::retriveClass($path, $classCache,"usecase\Home");
        return $usecase;
    }

    public  static function getRepository($domainType="Measurement"){
        $classCache = self::$_repo;
        $usecase = self::retriveClass($domainType, $classCache, "Measurement");
        return $usecase;
    }

    /**
     * @param $domainType
     * @param $classCache
     * @return Home
     */
    public static function retriveClass($domainType, $classCache,$default)
    {
        if (array_key_exists($domainType, $classCache)) {
            $usecase = $classCache[$domainType];
        } else {
            $usecase = new $default();
            $classCache[$domainType] = $usecase;
        }
        return $usecase;
    }
} 
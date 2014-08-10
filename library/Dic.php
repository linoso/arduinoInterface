<?php
/**
 * Created by PhpStorm.
 * User: Lino
 * Date: 10/08/14
 * Time: 2:53 PM
 */
namespace library;

class Dic {

    static public $_usecase = array();
    static public $_repo = array();

    /**
     * @param $path
     * @return UseCase
     */
    public static function getUseCase($path = "index")
    {
        $classCache = self::$_usecase[$path];
        $usecase = self::retriveClass($path, $classCache,"Home");
        return $usecase;
    }

    public  static function getRepository($domainType="mesurament"){
        $classCache = self::$_repo[$domainType];
        $usecase = self::retriveClass($domainType, $classCache, "Mesurament");
        return $usecase;
    }

    /**
     * @param $path
     * @param $classCache
     * @return Home
     */
    public static function retriveClass($path, $classCache,$default)
    {
        if (array_key_exists($path, self::$_usecase)) {
            $usecase = $classCache;
            return $usecase;
        } else {
            $usecase = new $default();
            $classCache = $usecase;
            return $usecase;
        }
    }
} 
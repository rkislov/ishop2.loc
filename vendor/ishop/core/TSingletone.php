<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 08.03.2018
 * Time: 0:03
 */

namespace ishop;


trait TSingletone
{
    private static $instance;

    public static function instance()
    {
        if (self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }
}
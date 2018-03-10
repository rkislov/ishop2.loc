<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 10.03.2018
 * Time: 16:01
 */

namespace ishop;


class Db
{
    use TSingletone;
    protected function __construct()
    {
        $db = require_once CONFIG . '/config_db.php';
        class_alias('\RedBeanPHP\R','\R');
        \R::setup($db['dsn'],$db['user'],$db['password']);
        if(!\R::testConnection()) {
            throw new \Exception('Нет соединения с БД', 500);
        }
        \R::freeze(true);
        if(DEBUG){
            \R::debug(true,1);
        }
    }
}
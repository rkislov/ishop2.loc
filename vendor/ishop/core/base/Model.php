<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 10.03.2018
 * Time: 15:30
 */

namespace ishop\base;


use ishop\Db;

abstract class Model
{
    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct()
    {
        Db::instance();
    }
}
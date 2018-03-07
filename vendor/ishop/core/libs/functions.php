<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 08.03.2018
 * Time: 0:20
 *
 * functions for debug
 */

function debug($arr)
{
    echo '<pre>' . print_r($arr, true) . '</pre>';
}
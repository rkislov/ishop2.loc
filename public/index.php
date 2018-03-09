<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 07.03.2018
 * Time: 23:22
 * Front controller
 */

require_once dirname(__DIR__ ). '/config/init.php';
require_once LIBS .'/functions.php';
require_once CONFIG . '/routes.php';

new \ishop\App();




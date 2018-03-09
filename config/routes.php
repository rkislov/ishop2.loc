<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 09.03.2018
 * Time: 15:55
 * routes file
 */

use ishop\Router;

//default route
Router::add('^admin$', ['controller'=> 'Main', 'action'=>'index','prefix'=>'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+0)?$',['prefix'=>'admin']);

Router::add('^$', ['controller'=> 'Main', 'action'=>'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
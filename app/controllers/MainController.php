<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 10.03.2018
 * Time: 0:24
 */

namespace app\controllers;




use ishop\Cache;

class MainController extends AppController
{

    public function indexAction()
    {

        $this->setMeta('Главная страница', 'Описание.....', 'тест, страница, хрень');

    }
}
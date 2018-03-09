<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 10.03.2018
 * Time: 0:24
 */

namespace app\controllers;




class MainController extends AppController
{

    public function indexAction()
    {
        //echo __METHOD__;
        $this->setMeta('Главная страница','Описание.....','тест, страница, хрень');
        $name = 'John';
        $age = 30;
        $names = ['Andrey', 'Jane'];
        $this->set(compact('name','age','names'));
    }
}
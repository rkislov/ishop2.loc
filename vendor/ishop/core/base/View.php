<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 10.03.2018
 * Time: 1:11
 */

namespace ishop\base;


class View
{
    public $route;
    public $controller;
    public $model;
    public $view;
    public $prefix;
    public $layout;
    public $data = [];
    public $meta = [];

    public function __construct($route, $layout = '',$view='', $meta )
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->view = $view;
        $this->view = $route['action'];
        $this->prefix = $route['prefix'];
        $this->model = $route['controller'];
        $this->meta = $meta;
        if($layout === false){
            $this->layout = false;
        }else{
            $this->layout = $layout ?: LAYOUT;
        }

    }
    public function render($data)
    {
        if(is_array($data)) extract($data);
        $viewFile = APP . "/views/{$this->prefix}{$this->controller}/{$this->view}.php";
        if(is_file($viewFile)) {
            ob_start();
            require_once $viewFile;
            $content = ob_get_clean();
        } else {
            throw new \Exception("Не найден вид {$viewFile}", 500);
        }
        if(false !==$this->layout){
            $laoutFile = APP . "/views/layouts/{$this->layout}.php";
            if(is_file($laoutFile)){
                require_once $laoutFile;
            }else{
                throw new \Exception("Не найден шаблон {$layoutFile}", 500);
            }
        }
    }
    public function getMeta()
    {
      $output = '<title>'.$this->meta['title'].'</title>'.PHP_EOL;
      $output .= '<meta name="description" content="'.$this->meta['desc'].'">'.PHP_EOL;
      $output .= '<meta name="keywords" content="'.$this->meta['keywords'].'">'.PHP_EOL;
      return $output;
    }
}
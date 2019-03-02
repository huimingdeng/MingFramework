<?php
/**
 * Created by PhpStorm.
 * User: huimingdeng
 * Date: 2019/3/2
 * Time: 20:21
 */
namespace web\controller;

use core\View;

class Index{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function show(){
        //echo "我是控制器的show方法";
        return $this->view->make('index')->with('Version', '版本 1.0 copyright:huimingdeng');
    }

    public function post(){

    }
}

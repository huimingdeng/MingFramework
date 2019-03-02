<?php
/**
 * Created by PhpStorm.
 * User: huimingdeng
 * Date: 2019/3/2
 * Time: 20:21
 */
namespace web\controller;

use core\View;
use Gregwar\Captcha\CaptchaBuilder;

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

    public function login(){
        return $this->view->make('login');//->with('builder', new CaptchaBuilder());
    }

    public function code(){
        header('Content-type: image/jpeg');
        $builder = new CaptchaBuilder();
        $builder->build();
        $_SESSION['phrase'] = $builder->getPhrase();// 验证码存储
        $builder->output();
    }

}

<?php
/**
 * Created by PhpStorm.
 * User: huimingdeng
 * Date: 2019/3/2
 * Time: 22:11
 */

namespace core;

class View{
    // 模板
    protected $file;
    // 模板变量
    protected $vars = [];

    /**
     * @param $file 模板文件名
     */
    public function make($file){
        $this->file = 'view/'.$file.'.html';
        return $this;
    }

    /**
     * @param string $name 变量名
     * @param string $value 变量值
     */
    public function with($name, $value){
        $this->vars[$name] = $value;
        return $this;
    }

    /**
     * 用于执行PHP代码字符化，用于加载模板
     */
    public function __toString()
    {
        extract($this->vars); // 因在同一作用域中，模板中可以获得
        include $this->file;
        return '';
    }
}
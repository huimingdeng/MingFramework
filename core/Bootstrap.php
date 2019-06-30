<?php
/**
 * Created by PhpStorm.
 * User: huimingdeng
 * Date: 2019/3/2
 * Time: 20:23
 */
namespace core;
class Bootstrap {
	/**
	 * 执行
	 */
	public static function run() {
		session_start();
//        echo "my is bootstrap::run";
		self::parseUrl();
	}

	/**
	 * 解析 url 路由解析实现
	 */
	public static function parseUrl() {
		if (isset($_GET['s'])) {
			// 分析 s 变量，生成控制器
			$s = explode('/', $_GET['s']);
			$class = '\web\controller\\' . ucfirst($s[0]) . 'Controller';
			$action = $s[1];
//            dd($s);
		} else {
			$class = "\web\controller\IndexController";
			$action = "show";
		}
		echo (new $class)->$action();
		// dd($_SERVER);
	}
}
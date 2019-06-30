<?php
/**
 * create by sublime text 3
 * Author : huimingdeng
 * create at : 2/21/2019 16:55
 */
// 使用第三方类库，自己编写的自动加载函数可能会存在问题，因此使用
require_once __DIR__ . "/vendor/autoload.php";
// \core\Bootstrap::run();

use \Bee\PDO\Model;
use \NoahBuscher\Macaw\Macaw;
Model::config(require_once __DIR__ . '/config/db.php');

// 可以抽出下面路由形成路由文件
Macaw::get('/', function () {
	echo 'Welcome to MingFrameWork!';
});

Macaw::get('/index', 'app\Controllers\Index@index');

Macaw::dispatch();
# mingframework #
composer 学习和框架开发学习的一个 demo，以后可能会删除，亦可能会完善使用。

测试 composer.json 文件 `"minimum-stability": "dev",` 是否下载分支 `dev` 内容。

MingFramework --> mingframework : 测试是否大小写问题导致 GitHub 和 packagist.org/ 站点的错误邮件频繁发生原因。

## MVC 实例 ##
创建测试控制器,测试模型,学习开发简易的小框架。

## 目录结构 ##
项目结构：
    
    |- mingframeworl
    |-- application 应用目录
    |---- controllers 控制器
    |---- models 模型
    |-- config 配置目录
    |---- db.php 数据库配置文件
    |-- core 框架核心部分 (今后需修改核心，舍弃自己造轮子的路由解析)
    |--- Bootstrap.php 框架核心实现
    |--- functions.php 核心函数
    |-- vendor 第三方库等
    |-- view 视图 (今后将迁移)
    |-- web 项目目录，控制器，模型等 (未来将舍弃，使用 application)
    |-- index.php 入口文件
    |-- config.php 配置文件


### 视图引擎 ###
1. 基于引擎开发的模板要符合贴近标准的HTML
2. 语法简单易懂
3. 良好的缓存机制
4. 扩展性良好
5. 网络资源多

目前视图引擎未能实现以上具体详细功能，需要继续学习相关知识，完善开发。

学习过程中可以使用 smart 模板等

### 第三方库

	"noahbuscher/macaw": "dev-master", // 路由
    "biaoqianwo/simple-pdo": "dev-master" // 数据库模型
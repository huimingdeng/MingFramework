# mingframework #
composer 学习和框架开发学习的一个 demo，以后可能会删除，亦可能会完善使用。

测试 composer.json 文件 `"minimum-stability": "dev",` 是否下载分支 `dev` 内容。

MingFramework --> mingframework : 测试是否大小写问题导致 GitHub 和 packagist.org/ 站点的错误邮件频繁发生原因。

## MVC 实例 ##
创建测试控制器,测试模型,学习开发简易的小框架。

## 目录结构 ##
项目结构：
    
    |- mingframeworl
    |-- core 框架核心部分
    |--- Bootstrap.php 框架核心实现
    |--- functions.php 核心函数
    |-- vendor 第三方库等
    |-- view 视图
    |-- web 项目目录，控制器，模型等
    |-- index.php 入口文件


### 视图引擎 ###
1. 基于引擎开发的模板要符合贴近标准的HTML
2. 语法简单易懂
3. 良好的缓存机制
4. 扩展性良好
5. 网络资源多

目前视图引擎未能实现以上具体详细功能，需要继续学习相关知识，完善开发。

学习过程中可以使用 smart 模板等
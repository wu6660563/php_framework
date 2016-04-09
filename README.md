## PHP FrameWork


### 1.使用说明

#### 1.1.导入SQL
将php_framwork/sql/install.sql，导入到Mysql数据库中

### 1.2.使用Apache服务器

+ 初学者建议使用WAMPServer：http://www.wampserver.com/  
+ 如果安装Wamp，请查看：http://jingyan.baidu.com/article/a501d80ccda6f5ec630f5eb7.html
+ 建议使用Apache的虚拟主机Vhost的方式

```config
#虚拟主机配置部分
<VirtualHost *:80>
    DocumentRoot "D:/xxx/php_framework/public"
    ServerName localhost
    SetEnv RUN_ENV development
</VirtualHost>
``` 

### 2.框架讲解

#### 2.1.菜单配置  

+ 菜单配置路径：php_framework/app/Config/memu.php  
+ 路由配置：php_framework/app/Config/route.php，此路由配置文件是在需要重定义路由规则的方式才需要配置，默认路由配置请看2.2
+ 数据库配置文件：php_framework/app/Config/app.php

#### 2.2.控制器

+ 控制器需要放在php_framwork/app/Controller/*配置
+ 路由名称需要一个单词加上Controller，例如订单：OrderController
+ 路由需要继承BaseController
+ 需要外部访问到的方法必须以xxxAction结尾，遵行驼峰命名法，如控制器是OrderController,方法名是indexAction，则可以通过order/index来访问，这个时候不需要配置route.php文件
+ 得到request的GET方式的数据，可以使用\App::request()->getQuery($key)，也可以使用$this->request->getQuery()，POST则是\App::request()->getPost($key)等
+ 重定向：$this->redirect('https://baidu.com');
+ 给客户端response数据，然后通过$this->display('xxx');将数据发送到页面
```php
$this->assign(
	[
		'a'=>'xxx',
		'b'=>'bbb',
		'c'=>'ccc',
		'd'=>'ddd',
	]
);
```
#### 2.3.页面View

+ 页面路径为php_framwork/app/View/*

#### 2.4.Model

+ Model放在为php_framwork/app/Model/*
+ 需要继承Model
+ 默认是单例模式
+ 增删改查方法后续补充，可以查看Model.php看如何实现的




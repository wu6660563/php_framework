## PHP FrameWork


### 1.使用说明

#### 1.1.导入SQL
将php_framwork/sql/install.sql，导入到Mysql数据库中

### 1.2.使用Apache服务器

初学者建议使用WAMPServer：http://www.wampserver.com/  

如果安装Wamp，请查看：http://jingyan.baidu.com/article/a501d80ccda6f5ec630f5eb7.html

建议使用Apache的虚拟主机Vhost的方式

```  
#虚拟主机配置部分
<VirtualHost *:80>
    DocumentRoot "D:/xxx/php_framework/public"
    ServerName localhost
    SetEnv RUN_ENV development
</VirtualHost>
``` 

### 2.框架讲解  

#### 2.1.菜单配置  

菜单配置路径：php_framework/app/Config/memu.php  

路由配置：php_framework/app/Config/route.php  

数据库配置文件：php_framework/app/Config/app.php  


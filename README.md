## PHP FrameWork


### 1.ʹ��˵��

#### 1.1.����SQL
��php_framwork/sql/install.sql�����뵽Mysql���ݿ���

### 1.2.ʹ��Apache������

��ѧ�߽���ʹ��WAMPServer��http://www.wampserver.com/  

�����װWamp����鿴��http://jingyan.baidu.com/article/a501d80ccda6f5ec630f5eb7.html

����ʹ��Apache����������Vhost�ķ�ʽ

```  
#�����������ò���
<VirtualHost *:80>
    DocumentRoot "D:/xxx/php_framework/public"
    ServerName localhost
    SetEnv RUN_ENV development
</VirtualHost>
``` 

### 2.��ܽ���  

#### 2.1.�˵�����  

�˵�����·����php_framework/app/Config/memu.php  

·�����ã�php_framework/app/Config/route.php  

���ݿ������ļ���php_framework/app/Config/app.php  


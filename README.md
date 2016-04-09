## PHP FrameWork


### 1.ʹ��˵��

#### 1.1.����SQL
��php_framwork/sql/install.sql�����뵽Mysql���ݿ���

### 1.2.ʹ��Apache������

+ ��ѧ�߽���ʹ��WAMPServer��http://www.wampserver.com/  
+ �����װWamp����鿴��http://jingyan.baidu.com/article/a501d80ccda6f5ec630f5eb7.html
+ ����ʹ��Apache����������Vhost�ķ�ʽ

```config
#�����������ò���
<VirtualHost *:80>
    DocumentRoot "D:/xxx/php_framework/public"
    ServerName localhost
    SetEnv RUN_ENV development
</VirtualHost>
``` 

### 2.��ܽ���

#### 2.1.�˵�����  

+ �˵�����·����php_framework/app/Config/memu.php  
+ ·�����ã�php_framework/app/Config/route.php����·�������ļ�������Ҫ�ض���·�ɹ���ķ�ʽ����Ҫ���ã�Ĭ��·�������뿴2.2
+ ���ݿ������ļ���php_framework/app/Config/app.php

#### 2.2.������

+ ��������Ҫ����php_framwork/app/Controller/*����
+ ·��������Ҫһ�����ʼ���Controller�����綩����OrderController
+ ·����Ҫ�̳�BaseController
+ ��Ҫ�ⲿ���ʵ��ķ���������xxxAction��β�������շ������������������OrderController,��������indexAction�������ͨ��order/index�����ʣ����ʱ����Ҫ����route.php�ļ�
+ �õ�request��GET��ʽ�����ݣ�����ʹ��\App::request()->getQuery($key)��Ҳ����ʹ��$this->request->getQuery()��POST����\App::request()->getPost($key)��
+ �ض���$this->redirect('https://baidu.com');
+ ���ͻ���response���ݣ�Ȼ��ͨ��$this->display('xxx');�����ݷ��͵�ҳ��
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
#### 2.3.ҳ��View

+ ҳ��·��Ϊphp_framwork/app/View/*

#### 2.4.Model

+ Model����Ϊphp_framwork/app/Model/*
+ ��Ҫ�̳�Model
+ Ĭ���ǵ���ģʽ
+ ��ɾ�Ĳ鷽���������䣬���Բ鿴Model.php�����ʵ�ֵ�




#Sign Up System
A web sign up system for international students,background used PHP, the database used MySQL.
***
##TODO
* 美化界面
* 后台登录密码系统
* 数据分析的其他功能
***

#Release Nodes
***
##1.0 beta - 2016-3-28
* 增加了中文登记界面的支持
* 更改了CSS文件，对表格布局进行了一次美化
* 增加了连接数据库对中文表单提交的支持

	使用设置连接字符的方法，mysql_query("SET NAMES 'utf8'"); 来确定编码。
* 由于前面的工程一直没有上传git，现进行一次脑补工程进展。\_(:з」∠)_
	
##0.9 - 2016-3-24
* 修复了mysql数据库导出excel文件的问题，即提升根文件夹权限以及赋予mysql文件导出权限。

	grant file on \*.* to root@localhost;
	
* 修复了后台系统未登陆直接访问后台页面的bug。通过使用session验证的方式解决。

```
<?php
    header("Content-type:text/html; charset=utf-8");
    session_start();
    if(empty($_SESSION['user'])){
        echo "<script>alert('请登录后台');
        location.href='./chooseLanguage.html';</script>";
        exit();
    }
?>
```
##0.8 - 2016-3-23
* 增加数据库文件导出功能，并且使用gbk编码出。（Microsoft office 系列软件似乎只支持中文编码为gbk的，utf-8依旧乱码）

```
select * from TABLE into outfile 'PATH' CHARACTER SET gbk;
```
##0.7 - 2016-3-21
* 增加对国籍select标签数据的添加，并建立数据库。（通过excel导入数据库减少大量工作量）

##0.6 - 2016-3-20
* 增加对表单输入的验证。带*值不为空，学号，手机号格式规定。(使用HTML5的新特性pattern的正则表达式方式)

```
<input type="text" id="schoolId" name="schoolId" pattern="^[Ll]201[0-9]{9}$" required="" oninvalid="setCustomValidity('Please Input your School ID Such As L201419630101')" oninput="setCustomValidity('')"/>*

pattern="^[1][0-9]{10}$"//验证手机号正则表达式
```

##0.1~0.5 - 2016-3
* 读档失败了，前面差不多就是撸了一些界面吧，搭建了一下网页简单的架构。
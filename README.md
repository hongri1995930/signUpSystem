#Sign Up System
A web sign up system for international students,background used PHP, the database used MySQL.
***
##TODO
* 数据分析的其他功能


#Release Nodes
***

##1.2.1 - 2016-4-14
* 优化了下载链接
* 缩小了背景图片
* 防止sql注入：.addslashed('$name').

##1.2 - 2016-4-5
* 解决了对服务器端Ubuntu系统mysql无法导出至Apache2文件夹下的问题，但对Ubuntu文件夹权限限制，apparmor进程限制的问题还是没有解决，转而使用在php中加读取文件流的方式输出到网页使用户下载。
* 使用php文件之间变量传递解决文件名的读取问题：

```
echo "<script>alert('导出成功！');location.href='./loadfile.php?ti=".$ti."';</script>";
```
* 使用向网页输出流的方式提供下载服务：

```
$file = fopen($file_dir . $file_name,"r"); // 打开文件
// 输入文件标签
Header("Content-type: application/octet-stream");
Header("Accept-Ranges: bytes");
Header("Accept-Length: ".filesize($file_dir . $file_name));
Header("Content-Disposition: attachment; filename=" . $file_name);
// 输出文件内容
echo fread($file,filesize($file_dir . $file_name));
fclose($file);
exit();
```

* 对服务器端文件进行了整理
* 修复了表单页在手机端显示诡异的问题
* 缩小了图片大小，减少服务器压力，提高浏览速度
* 更改服务器端链接为http:\\\120.27.120.4\signupsystem

##1.1 beta - 2016-4-2
* 建立了用户数据库，增加了后台系统的保密性
* 基本功能完成，部署至服务器端等待使用（http:\\\120.27.120.4\signUpSystem）

##1.0.3 beta - 2016-3-31
* 更正了一些网页跳转的错误
* 完成对表单页面以及登录界面美化，在登录界面引入了bootstrap框架
* 修改了一下首页设计，使得定位以及背景色更加协调（\_(:з」∠)_
调色死人了。。。）

##1.0.2 beta - 2016-3-30
* 对首页界面进行了美化

##1.0.1 beta - 2016-3-29
* 更新了项目工程的目录并清除了少数测试文件

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
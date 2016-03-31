<?php
    header("Content-type:text/html; charset=utf-8");
    session_start();
    if(empty($_SESSION['user'])){
        echo "<script>alert('请登录后台');location.href='../index.html';</script>";
        exit();
    }
?>
<html>
    <head>
        <title>Internation College</title>
        <!-- <base href="http://120.27.120.4/international/"/> -->
        <meta name="author" content="nelson"/>
        <meta name="description" content="The background"/>
        <meta charset="utf-8"/>
        <link rel="shortcut icon" href="../image/schoolicon.ico" type="image/x-icon" />
    </head>
    <body>
        <h1>管理报名数据</h1>
            <h2>1、
                <a href="./deleteData.php">清除数据库现有数据</a>      
            </h2>
            <h2>2、
                <a href="./downLoad.php">下载报名数据</a>      
            </h2> 
    </body>
</html>
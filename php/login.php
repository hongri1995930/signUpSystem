<?php
    header("Content-type:text/html; charset=utf-8");
        $name=$_POST["user"];
        $password=$_POST["password"];
        if ($name=="nelson" and $password=="hong"){
            session_start();//开启session
            $_SESSION['user'] = $name;//将登录名保存到session中
            echo "<script>alert('登录成功！');location.href='./background.php';</script>";
            exit();
        }
        else{
             echo "<script>alert('登录失败！');location.href='./chooseLanguage.html';</script>";
             exit();
        }
?>
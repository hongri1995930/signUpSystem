<?php
    header("Content-type:text/html; charset=utf-8");
        require('conn.php');
        $name=$_POST["user"];
        $password=$_POST["password"];
        $sql= "select * from UserList where User='$name' and Password='$password'";
        $result = mysql_query( $sql) or die("error");
        if (mysql_num_rows($result)>0){
            session_start();//开启session
            $_SESSION['user'] = $name;//将登录名保存到session中
            echo "<script>alert('登录成功！');location.href='./background.php';</script>";
            exit();
        }
        else{
             echo "<script>alert('登录失败！');location.href='../html/backgroundLogin.html';</script>";
             exit();
        }
?>
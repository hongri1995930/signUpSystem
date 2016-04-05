<?php
    require('conn.php');
    
    session_start();
    if(empty($_SESSION['user'])){
        echo "<script>alert('请登录后台');location.href='../index.html';</script>";
        exit();
    }
    
    $sql_in="insert into his_SignInfo select * from SignInfo";
    $sql_del="truncate table SignInfo";
    if (mysql_num_rows($rs1)>0){
       $rs2 = mysql_query( $sql_in) or die("error");
       $rs3 = mysql_query( $sql_del) or die("error");
    }
    echo "<script>alert('清除成功！');location.href='./background.php';</script>";
?>

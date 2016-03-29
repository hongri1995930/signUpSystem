<?php
    header("Content-type:text/html; charset=utf-8");
    session_start();
    if(empty($_SESSION['user'])){
        echo "<script>alert('请登录后台');location.href='../index.html';</script>";
        exit();
    }
    
    require('conn.php');
    
    $time = time();
    $ti = date("m-d h:i:s",$time);
    $sql="select SidNr,Sname,Ssex,CchineseName,SpassportNr,SphoneNr,Sreligion,Scollege,Smajor,Scomm,Sdate from SignInfo,Country where SignInfo.Cabb=Country.Cabb into outfile '/Library/WebServer/Documents/signUpSystem/data/signInfo_".$ti.".xls' CHARACTER SET gbk";
    $rs = mysql_query( $sql) or die("error");
    echo "<script>alert('导出成功！');location.href='../data/signInfo_".$ti.".xls';</script>";
?>
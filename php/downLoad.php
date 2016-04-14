<?php
    session_start();
    if(empty($_SESSION['user'])){
        echo "<script>alert('请登录后台');location.href='../index.html';</script>";
        exit();
    }

    require('conn.php');

    $time = time();
    $ti = date("m-d h:i:s",$time);
    $sql="select SidNr,Sname,Ssex,CchineseName,SpassportNr,SphoneNr,Sreligion,Scollege,Smajor,Scomm,Sdate from SignInfo,Country where SignInfo.Cabb=Country.Cabb into outfile '/tmp/signInfo_".$ti.".xls' CHARACTER SET gbk";
    $rs = mysql_query( $sql) or die("error");

    $file_name="signInfo_".$ti.".xls";
    $file_dir="/tmp";
    $file_dir = $file_dir."/";
    if (!file_exists($file_dir.$file_name))   {   //检查文件是否存在  
        echo   "File not found!";
        exit();
    }   else   {
        $file = fopen($file_dir . $file_name,"r"); // 打开文件
        Header("Content-type: application/octet-stream");
        Header("Accept-Ranges: bytes");
        Header("Accept-Length: ".filesize($file_dir . $file_name));
        Header("Content-Disposition: attachment; filename=" . $file_name);
        // 输出文件内容
        echo fread($file,filesize($file_dir . $file_name));
        fclose($file);
        exit();
    }
?>
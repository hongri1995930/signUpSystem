<?php
    header("Content-type:text/html; charset=utf-8");
	require('checkpost.php');
    $name=post_check($_POST["name"]);
    $sex=post_check($_POST["fave"]);
    $idNumber=post_check($_POST["schoolId"]);
    $nationality=post_check($_POST["nationality"]);
    $passportNr=post_check($_POST["passport"]);
    $phoneNr=post_check($_POST["phoneNumber"]);
    $religion=post_check($_POST["religion"]);
    $college=post_check($_POST["college"]);
    $major=post_check($_POST["major"]);
    $comment=post_check($_POST["comments"]);
            
	
    //database
    require('conn.php');                
    mysql_query("SET NAMES 'utf8'");
                
    $sql="select * from SignInfo where SidNr = '$idNumber'";
    $rs = mysql_query( $sql) or die("error");
    if (mysql_num_rows($rs)>0){
        echo "<script>alert('You have already Sign up! ');location.href='../index.html';</script>";
	exit();
    }
                
    //$ip=$_SERVER['REMOTE_ADDR'];
    $sql="insert into SignInfo(Sname,SidNr,SpassportNr,Ssex,Sdate,Cabb,SphoneNr,Sreligion,Scollege,Smajor,Scomm)
    values('$name','$idNumber','$passportNr','$sex',now(),'$nationality','$phoneNr','$religion','$college','$major','$comment')";
    //echo $sql;
    mysql_query( $sql) or die('Error');
    echo "<script>alert('Sign up Successful! ');location.href='../index.html';</script>";
?>

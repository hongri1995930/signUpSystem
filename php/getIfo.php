<?php
    header("Content-type:text/html; charset=utf-8");
    $name=$_POST["name"];
    $sex=$_POST["fave"];
    $idNumber=$_POST["schoolId"];
    $nationality=$_POST["nationality"];
    $passportNr=$_POST["passport"];
    $phoneNr=$_POST["phoneNumber"];
    $religion=$_POST["religion"];
    $college=$_POST["college"];
    $major=$_POST["major"];
    $comment=$_POST["comments"];
            
    //database
    require('conn.php');                
    mysql_query("SET NAMES 'utf8'");
                
    $sql="select * from SignInfo where SidNr = '$idNumber'";
    $rs = mysql_query( $sql) or die("error");
    if (mysql_num_rows($rs)>0){
        echo "<script>alert('You have already Sign up! ');location.href='../index.html';</script>";
    }
                
    //$ip=$_SERVER['REMOTE_ADDR'];
    $sql="insert into signInfo(Sname,SidNr,SpassportNr,Ssex,Sdate,Cabb,SphoneNr,Sreligion,Scollege,Smajor,Scomm)
    values('$name','$idNumber','$passportNr','$sex',now(),'$nationality','$phoneNr','$religion','$college','$major','$comment')";
    //echo $sql;
    mysql_query( $sql) or die('Error');
    echo "<script>alert('Sign up Successful! ');location.href='../index.html';</script>";
    //header("Location:chooselanguage.html");
?>
 
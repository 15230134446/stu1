<?php
require_once 'mysql.php';
header('Content-type:text/html;charset=utf-8');
$username1 =$_POST["username"];
$password1 =$_POST["password"];
//判断是否是学生
$selesql = "select * from stu where zh='$username1' and mm='$password1' and gly=1";
$res = mysqli_query($conn,$selesql);
$num = mysqli_num_rows($res);
//判断是否是老师
$sel = "select * from ls where zh='$username1' and mm='$password1' and gly=2";
$res1 = mysqli_query($conn,$sel);
$num1 = mysqli_num_rows($res1);
if($num>0){
    $selesql = "select * from stu where zh='$username1'";
    $res = mysqli_query($conn,$selesql);
    $qb = mysqli_fetch_array($res);
    if($qb[0]==null){
        echo "<script>alert('登录成功');window.location.href='../Page/student4.php';</script>";
        //开启会话传输账号信息
        session_start();
        $_SESSION['username'] = $username1;
    }else{
    //登录学生界面
    echo "<script>alert('登录成功');window.location.href='../Page/student1.php';</script>";
    //开启会话传输账号信息
    session_start();
    $_SESSION['username'] = $username1;
    }
}else if($num1>0){
    //登录老师界面
     echo "<script>alert('登录成功');window.location.href='../Page/ls1.php';</script>";
    //开启会话传输账号信息
    session_start();
    $_SESSION['username'] = $username1;
}else{
     echo "<script>alert('登陆失败');history.back();</script>";
}
?>

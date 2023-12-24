<?php
$xm =$_POST["xm"];
$xb =$_POST["xb"];
$csrq =$_POST["csrq"];
$rxrq =$_POST["rxrq"];
$xxmc =$_POST["xxmc"];
$zy =$_POST["zy"];
$dh =$_POST["dh"];
$ss =$_POST["ss"];
$fdy =$_POST["fdy"];
require_once 'mysql.php';
header('Content-type:text/html;charset=utf-8');
//接收logon会话
session_start();
$cc = $_SESSION['username'];
//查询学生个人信息
$selesql = "UPDATE stu SET xm = '$xm',xb = '$xb',csrq = '$csrq',rxrq = '$rxrq',xxmc = '$xxmc',zy = '$zy',dh = '$dh',ss = '$ss',fdy = '$fdy' WHERE zh = '$cc'";
$res = mysqli_query($conn,$selesql);
if($res==true){
    echo "<script>alert('修改成功');window.location.href='../Page/student4.php';</script>";
}else{
    echo "<script>alert('修改失败');history.back();</script>";
}
?>
<?php
require_once 'mysql.php';
header('Content-type:text/html;charset=utf-8');
//接收logon会话
session_start();
$cc = $_SESSION['username'];
//查询学生个人信息
$selesql = "select * from stu where zh='$cc'";
$res = mysqli_query($conn,$selesql);
$qb = mysqli_fetch_array($res);
$selesql = "select * from ls where zh='$cc'";
$res = mysqli_query($conn,$selesql);
$ls = mysqli_fetch_array($res);
?>
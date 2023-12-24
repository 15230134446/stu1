<?php
$servername = "localhost";  // 数据库服务器名称
$username = "root";     // 数据库用户名
$password = "root";     // 数据库密码
$dbname = "students";       // 数据库名称
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
//设置默认字符编码
mysqli_set_charset($conn,'utf8');
?>

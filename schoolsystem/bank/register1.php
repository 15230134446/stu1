<?php
require_once 'mysql.php';
header('Content-type:text/html;charset=utf-8');
$manage =$_POST["manage"];
//判断用户名是否重复
$ls = mysqli_query($conn,"SELECT * FROM stu WHERE zh = '".$_POST["username"]."' LIMIT 1");
$lss = mysqli_num_rows(ls);
$stu = mysqli_query($conn,"SELECT * FROM stu WHERE zh = '".$_POST["username"]."' LIMIT 1");
$xs = mysqli_num_rows($stu);
if ($lss>0 or $xs>0){
    echo "<script>alert('用户名重复');history.back();</script>";
}else{
//判断管理员密码是否为空
if ($manage==null){
    $manage=1;
    $sql = mysqli_query($conn,"SELECT * FROM gly WHERE glpassword = $manage LIMIT 1");
    $num = mysqli_num_rows($sql);
    if ($num>0){
        //执行插入语句
        $result=mysqli_query($conn,"insert into ls(zh,mm,gly,dh) values('".$_POST["username"]."','".$_POST["password"]."',2,'".$_POST["tel"]."')");
    }else{
        //执行插入语句
        $result=mysqli_query($conn,"insert into stu(zh,mm,gly,dh) values('".$_POST["username"]."','".$_POST["password"]."',1,'".$_POST["tel"]."')");
    }
    if($result==true){
        echo "<script>alert('用户注册成功');window.location.href='../Page/logons.php';</script>";
    }else{
        echo "<script>alert('用户注册失败');history.back();</script>";
    }
}else{
    //判断管理员密码是否正确
    $sql = mysqli_query($conn,"SELECT * FROM gly WHERE glpassword = $manage LIMIT 1");
    $num = mysqli_num_rows($sql);
    if ($num>0){
        if ($num>0){
            //执行插入语句
            $result=mysqli_query($conn,"insert into ls(zh,mm,gh,dh) values('".$_POST["username"]."','".$_POST["password"]."',2,'".$_POST["tel"]."')");
        }else{
            //执行插入语句
            $result=mysqli_query($conn,"insert into stu(zh,mm,gly,dh) values('".$_POST["username"]."','".$_POST["password"]."',1,'".$_POST["tel"]."')");
        }
        //数据库是否插入成功
        if($result==true){
            echo "<script>alert('用户注册成功');window.location.href='../Page/logons.php';</script>";
        }else{
            echo "<script>alert('用户注册失败');history.back();</script>";
        }
    }else{
        echo "<script>alert('管理员密码错误');history.back();</script>";
    }
}
}
?>
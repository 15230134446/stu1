<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册页面</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(../Image/1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            width: 400px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>注册</h2>
    <form action="../bank/register1.php" method="post" name="students1">
        <div class="form-group">
            <label for="username">用户名:</label>
            <input type="text" id="username" name="username" required placeholder="学号/工号">
        </div>
        <div class="form-group">
            <label for="manage">管理员:</label>
            <input type="password" id="manage" name="manage"  placeholder="管理员密码" >
        </div>
        <div class="form-group">
            <label for="tel">电话:</label>
            <input type="text" id="tel" name="tel" required placeholder="电话">
        </div>
        <div class="form-group">
            <label for="password">设置密码:</label>
            <input type="password" id="password" name="password" required placeholder="输入密码">
        </div>
        <div class="form-group">
            <label for="password1">确认密码:</label>
            <input type="password" id="password1" name="password1" required placeholder="输入密码">
        </div>
        <input type="submit" value="注册">
    </form>
</div>
<script type="text/javascript">
    function check(){
        var username=document.getElementsByName("username")[0].value;
        if(!username){
            alert("请输入用户名");
            return false;
        }
       /* var manage=document.getElementsByName("manage")[0].value;
        if(!manage){
            alert("请输入用户名");
            return false;
        }*/
        var password=document.getElementsByName("password")[0].value;
        if(!password){
            alert("请输入密码");
            return false;
        }
        var password1=document.getElementsByName("password1")[0].value;
        if(!password1){
            alert("请输入确认密码");
            return false;
        }
        if(password!=password1){
            alert("两次输入的密码不一致");
            return false;
        }
        var tel=document.getElementsByName("tel")[0].value;
        if(!tel){
            alert("请输入手机号");
            return false;
        }
        if(tel.length!=11){
            alert("请输入11位的手机号");
            return false;
        }
        students1.submit();
    }
</script>
</body>
</html>
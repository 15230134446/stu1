<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>学生管理系统</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/echarts.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(../Image/1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .container {
            max-width: 400px;
            margin: 150px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }
        h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }
        a{
            color:grey;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>学生管理系统</h2>
    <form method="post" name="student1" action="../bank/logon.php" >
        <div class="form-group">
            <label for="username">用户名</label>
            <input type="text" id="username" name="username" required placeholder="学号/工号">
        </div>
        <div class="form-group">
            <label for="password">密码</label>
            <input type="password" id="password" name="password" required placeholder="密码">
        </div>
        <div class="form-group">
            <input type="submit" value="登录" id="logon">
        </div>
        <div class="form-group" align="right">
            <a href="register.php">注册</a>
        </div>
    </form>
</div>
</body>
</html>
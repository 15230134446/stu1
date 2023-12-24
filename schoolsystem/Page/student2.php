<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>学生管理系统</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            font-size: 1rem;
        }
        body{
            background-repeat: repeat;
            background-position: right;
        }
        #container{
            padding: 10px;
            margin: 0 auto;
            width: 80%;
            height: 100%;
        }
        .top{
            background-image: url(../Image/2.PNG);
            color: white;
            padding: 30px;
            font-size: 1.25rem;
            font-weight: bold;
            text-align: right;
            background-repeat: no-repeat;
            background-size: cover;
        }
        ul{
            background-color: blueviolet;
            padding: 10px;
            display: flex;
            list-style:none;
        }
        ul li{
            flex: 1;
            text-align: center;
        }
        .conter{
            padding: 20px 7%;
            background-color: beige;
        }
        .conter_up{
            text-decoration: none;
            color: #9292ee;
            font-size: 1.5rem;
            font-weight: bold;
            letter-spacing: 0.2rem;
            padding-bottom: 20px;
        }
        .conter_middle table{
            border: 1px solid ;
            text-align: center;
            width: 100%;
            font-size: 1.5rem;
            letter-spacing: 0.1rem;
            border: 2px solid black;
            table-layout:fixed;word-break:break-all;
        }
        .conter_middle td,th{
            border: 1px solid #6e6767;
            height: 60px;
        }
        .conter_middle a{
            text-decoration: none;
            font-weight: bold;
        }
        .conter_down{
            display: flex;
            justify-content: flex-end;
            padding: 20px;
        }
        .conter_down>*{
            margin-right: 8px;
        }
        .foot{
            background-image: url(../Image/3.PNG);
            padding: 20px;
            color: white;
            display: flex;
            justify-content: center;
        }
        #tiao{
            color:white;
            text-decoration: none;
            font-size: 1.25rem;
        }
    </style>
</head>
<body>
<div id="container">
    <div class="top">
        欢迎进入学生管理信息平台
    </div>
    <div class="nav">
        <ul>
            <li><a href="student1.php" id="tiao">个人信息</a></li>
            <li><a href="student2.php" id="tiao">我的课程</a></li>
            <li><a href="student3.php" id="tiao">我的老师</a></li>
            <li><a href="student4.php" id="tiao">修改信息</a></li>
        </ul>
    </div>
    <div class="conter">
        <div class="conter_up">
            我的信息列表
        </div>
        <div class="conter_middle">
            <table cellspacing="0" cellpadding="0">
                <thead>
                <tr>
                    <th colspan="2"></th>
                    <th>周一</th>
                    <th>周二</th>
                    <th>周三</th>
                    <th>周四</th>
                    <th>周五</th>
                    <th>周六</th>
                    <th>周日</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td rowspan="4">上午</td>
                    <td>一</td>
                    <td>动态网站设计开发驱蚊</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td><a href="#">删除</a> <a href="student4.php">修改</a></td>
                </tr>
                <tr>
                    <td>二</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td><a href="#">删除</a> <a href="#">修改</a></td>
                </tr>
                <tr>
                    <td>三</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td><a href="#">删除</a> <a href="#">修改</a></td>
                </tr>
                <tr>
                    <td>四</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td><a href="#">删除</a> <a href="#">修改</a></td>
                </tr>
                <tr>
                    <td rowspan="4">下午</td>
                    <td>五</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td><a href="#">删除</a> <a href="#">修改</a></td>
                </tr>
                <tr>
                    <td>六</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td><a href="#">删除</a> <a href="#">修改</a></td>
                </tr>
                <tr>
                    <td>七</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td><a href="#">删除</a> <a href="#">修改</a></td>
                </tr>
                <tr>
                    <td>八</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td><a href="#">删除</a> <a href="#">修改</a></td>
                </tr>
                <tr>
                    <td rowspan="2">晚上</td>
                    <td>九</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td><a href="#">删除</a> <a href="#">修改</a></td>
                </tr>
                <tr>
                    <td>十</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td><a href="#">删除</a> <a href="#">修改</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="conter_down">
            <span>共5页</span>
            <input type="button" name="" id="" value="上一页" />
            <select name="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <input type="button" name="" id="" value="下一页" />
        </div>
    </div>
    <div class="foot">
        &copy;网络工程(专升本)2304李文版权所有
    </div>
</div>
</body>
</html>
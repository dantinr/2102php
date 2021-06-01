<?php
    session_start();
    //判断用户是否已登录
    if(isset($_SESSION['user'])){
        header('Refresh:2;url=my.php');
        echo "用户已登录，正在跳转至个人中心";
        die();
    }


//接收 form表单数据 $_POST, 验证是否符合规则

    //处理变量
    $username = trim($_POST['u_name']);
    $mobile = trim($_POST['u_mobile']);
    $email = trim($_POST['u_email']);
    $pass1 = trim($_POST["u_pass1"]);
    $pass2 = trim($_POST["u_pass2"]);
    $address = trim($_POST['u_address']);
    $reg_time = time();                 //注册时间
    $age = intval($_POST['u_age']);     //年龄
    $upass = password_hash($pass1,PASSWORD_BCRYPT);


    // 使用mysqli连接 MySQL
    $host = "127.0.0.1";        // Mysql的主机地址
    $user = 'root';             //数据库的用户名
    $pass = '123456abc';        // 数据库密码
    $db = "php2102";            //使用的数据库

    // 连接数据库
    $link = new mysqli($host, $user, $pass, $db);
    //设置字符集
    mysqli_query($link,"set names utf8");


    // sql语句
    $sql = "insert into users (`username`,`mobile`,`email`,`pass`,`reg_time`,`age`,`address`) 
values ('{$username}','{$mobile}','{$email}','{$upass}',$reg_time,$age,'{$address}')";

    //准备阶段
    $stmt = mysqli_prepare($link,$sql);

    //执行阶段
    $result = mysqli_stmt_execute($stmt);

    if($result){
        //向客户端响应头信息
        header('Refresh:2;url=login.html');
        echo "注册成功，3秒后跳转至登录页面";
    }else{
        echo "insert 失败";
    }









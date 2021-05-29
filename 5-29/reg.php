<?php

    //接收 form表单数据 $_POST
    echo '<pre>';print_r($_POST);echo '</pre>';

    // 使用mysqli连接 MySQL
    $host = "127.0.0.1";        // Mysql的主机地址
    $user = 'root';             //数据库的用户名
    $pass = '123456abc';        // 数据库密码
    $db = "php2102";            //使用的数据库

    // 连接数据库
    $link = new mysqli($host, $user, $pass, $db);

    //处理变量
    $username = trim($_POST['uname']);
    $mobile = trim($_POST['mobile']);
    $email = trim($_POST['email']);

    // sql语句
    $sql = "insert into users (`username`,`mobile`,`email`) 
values ('{$username}','{$mobile}','{$email}')";

    //准备阶段
    $stmt = mysqli_prepare($link,$sql);

    //执行阶段
    $result = mysqli_stmt_execute($stmt);

    if($result){
        echo "insert 成功";
    }else{
        echo "insert 失败";
    }









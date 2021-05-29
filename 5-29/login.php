<?php

    //接收 form表单数据 $_POST, 验证是否符合规则
    //处理变量
    $value = trim($_POST['u']);         //可以是 username、email、mobile
    $upass = trim($_POST['pass']);


    // 使用mysqli连接 MySQL
    $host = "127.0.0.1";        // Mysql的主机地址
    $user = 'root';             //数据库的用户名
    $pass = '123456abc';        // 数据库密码
    $db = "php2102";            //使用的数据库

    // 连接数据库
    $link = new mysqli($host, $user, $pass, $db);


    // sql语句
    $sql = "select * from users where username='{$value}' or email='{$value}' or mobile='{$value}'";
    echo $sql;echo '</br>';

    //查询
    $result = mysqli_query($link,$sql);
    //获取结果
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

    if(empty($rows)){           //没有这个用户
        die("查无此人");
    }

    // 用户信息 $rows[0]

    //验证密码  password_verify()
    if( password_verify($upass,$rows[0]['pass']) ){
        echo "登录成功";
        //更新用户最后一次登录时间
        $now = time();
        $sql = "update users set last_login_time={$now} where userid={$rows[0]['userid']}";
        //TODO 执行sql

    }else{
        echo "密码不正确";
    }







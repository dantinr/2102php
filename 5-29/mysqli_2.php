<?php

    //接收 URL 参数
    //强制类型转换
    //$userid = intval( $_GET['id'] );          //用户id
    $username = trim($_GET['name']);            //处理 字符串
    // 使用mysqli连接 MySQL
    $host = "127.0.0.1";        // Mysql的主机地址
    $user = 'root';             //数据库的用户名
    $pass = '123456abc';        // 数据库密码
    $db = "php2102";            //使用的数据库

    $link = new mysqli($host, $user, $pass, $db);

    //获取 user 表中的数据
    $sql = 'select * from users where username="'.$username.'"' ;
    echo $sql;echo '</br>';

    //执行一个 查询
    $result = mysqli_query($link,$sql);

    // 获取记录
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo '<pre>';print_r($rows);echo '</pre>';


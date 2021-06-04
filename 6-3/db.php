<?php
    // 使用mysqli连接 MySQL
    $host = "127.0.0.1";        // Mysql的主机地址
    $user = 'root';             //数据库的用户名
    $pass = '123456abc';        // 数据库密码
    $db = "php2102";            //使用的数据库

    // 连接数据库
    $link = new mysqli($host, $user, $pass, $db);

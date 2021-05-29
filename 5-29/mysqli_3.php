<?php
    // 使用mysqli连接 MySQL
    $host = "127.0.0.1";        // Mysql的主机地址
    $user = 'root';             //数据库的用户名
    $pass = '123456abc';        // 数据库密码
    $db = "php2102";            //使用的数据库

    $link = new mysqli($host, $user, $pass, $db);


    // 向数据库中写入数据
    $sql = "insert into users (`username`,`email`,`mobile`,`pass`,`account`)
 values ('zhangsan111','zhangsan111@qq.com','13311223344','xxxxxx',99999)";

    // 准备阶段
    $stmt = mysqli_prepare($link,$sql);
    var_dump($stmt);
    echo '<hr>';
    echo '<pre>';print_r($stmt);echo '</pre>';

    echo '<hr>';
    // 执行阶段
    mysqli_stmt_execute($stmt);
    echo '<pre>';print_r($stmt);echo '</pre>';






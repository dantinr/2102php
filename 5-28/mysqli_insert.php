<?php
    // 创建连接
    $link = new mysqli("localhost", "root", "123456abc", "php2102");
    $account = mt_rand(0,100000);
    //构造sql语句
    $sql = "insert into users (`username`,`email`,`mobile`,`pass`,`account`) values ('zhangsan','zhangsan@qq.com','13312344321','xxxxxxxx',{$account})";
    //准备执行sql语句
    $stmt = mysqli_prepare($link,$sql);
    //执行sql
    $stmt->execute();

    //检查sql执行情况
    $affect_rows = $stmt->affected_rows;
    echo "影响的行数: ". $affect_rows;echo '</br>';






<?php
    // 创建连接
    $link = new mysqli("localhost", "root", "123456abc", "php2102");
    // 准备sql语句
    $sql = "select * from users";
    // 执行查询
    $res = mysqli_query($link,$sql);
    // 获取结果
    $rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
    echo '<pre>';print_r($rows);echo '</pre>';



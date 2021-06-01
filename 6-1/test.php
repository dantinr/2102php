<?php
    // 使用mysqli连接 MySQL
    $host = "127.0.0.1";        // Mysql的主机地址
    $user = 'root';             //数据库的用户名
    $pass = '123456abc';        // 数据库密码
    $db = "php2102";            //使用的数据库

    // 连接数据库
    $link = new mysqli($host, $user, $pass, $db);


    //求用户的平均年龄
    $sql = "select * from users";
    $result = mysqli_query($link,$sql);
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
    //echo '<pre>';print_r($rows);echo '</pre>';

    $age = 0;
    foreach($rows as $k=>$v){
        //年龄总和
        $age += $v['age'];
    }

    echo "年龄总和： ". $age;echo '</br>';
    //求平均年龄
    $avg_age = $age / count($rows);
    echo "平均年龄1： ". $avg_age;echo '</br>';
    echo "平均年龄Ceil ： ". ceil($avg_age);echo '</br>';
    echo "平均年龄Floor ： ". floor($avg_age);echo '</br>';

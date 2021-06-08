<?php
    //使用pdo 操作数据库
    // 1 连接数据库
    $host = "127.0.0.1";        //数据库地址
    $db = 'php2102';            //数据库名
    $user = 'root';             //数据库用户名
    $pass = '123456abc';        // 数据库的用户密码
    $dbh = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);
    var_dump($dbh);
    echo '</br>';
    $id = intval($_GET['id']);
    // 2 sql语句
    $sql = "select user_id,user_name from p_users where user_id={$id}";
    echo $sql;echo '</br>';
    // 3 查询
    $stmt = $dbh->query($sql);          //返回结果集对象 statement
    var_dump($stmt);echo '</br>';
    // 4 获取数据
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);      //获取数据
    echo '<pre>';print_r($rows);echo '</pre>';


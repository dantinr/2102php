<?php

    echo '<pre>';print_r($_POST);echo '</pre>';


    //生成密码
    if($_POST['pass1'] == $_POST['pass2']){
        $password = password_hash($_POST['pass2'],PASSWORD_BCRYPT);
    }
    // 使用pdo insert
    $host = "127.0.0.1";
    $user = "root";
    $pass = "123456abc";
    $db = "php2102";
    $dbh = new PDO("mysql:host=$host;dbname=$db", $user, $pass);


    $sql = "insert into p_users (`user_name`,`email`,`mobile`,`password`) 
values (?,?,?,?)";

    echo "准备执行的sql语句：". $sql;echo '</br>';
    // 预处理
    $stmt = $dbh->prepare($sql);
    //绑定参数
    $stmt->bindParam(1,$_POST['user_name']);
    $stmt->bindParam(2,$_POST['email']);
    $stmt->bindParam(3,$_POST['mobile']);
    $stmt->bindParam(4,$password);

    //执行sql
    $stmt->execute();

    //判断错误
    $err_code = $stmt->errorCode();
    if($err_code != '00000'){
        $err_info = $stmt->errorInfo();
        echo $err_info[2];
        die;
    }

    //查看sql执行受影响的行数
    $affect_rows = $stmt->rowCount();
    echo "受影响的函数：" . $affect_rows;
    if($affect_rows>0){
        echo "执行成功";echo '</br>';
    }else{
        echo "注册失败";echo '</br>';
    }




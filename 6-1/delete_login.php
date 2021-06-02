<?php
    //删除登录记录  从 login_history表中删除 id=?

    include "db.php";
    $id = intval($_GET['id']);          //要删除的记录的 id
    $sql = "delete from login_history where id={$id}";

    // 准备sql阶段
    $stmt = mysqli_prepare($link,$sql);
    // 执行sql
    $res = mysqli_stmt_execute($stmt);

    // 判断执行结果
    //var_dump($res);echo '</br>';
    //echo '<pre>';print_r($stmt);echo '</pre>';

    if($stmt->affected_rows > 0){       //判断sql执行影响的行数 删除成功
        //页面跳转
        header('Refresh:2;url=my.php');
        echo "删除成功";
    }else{
        //删除失败
        header('Refresh:2;url=my.php');
        echo "删除失败";
    }




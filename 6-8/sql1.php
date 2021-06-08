<?php
    include "../db.php";


    //根据 url传参 查询数据库中 用户表信息
    echo "接收到的GET参数：" . $_GET['id'];echo '</br>';
    $id = intval($_GET['id']);
    $sql = "select user_id,user_name from p_users where user_id={$id}";
    echo $sql;echo '</br>';

    $res = mysqli_query($link,$sql);
    $rows = mysqli_fetch_all($res,MYSQLI_ASSOC);

    echo '<pre>';print_r($rows);echo '</pre>';



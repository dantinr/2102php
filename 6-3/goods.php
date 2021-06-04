<?php
    include "db.php";
    $id = intval($_GET['id']);

    $sql = "select * from p_goods where goods_id={$id}";
    $res = mysqli_query($link,$sql);
    //获取一条数据
    $row = mysqli_fetch_assoc($res);
    //echo '<pre>';print_r($row);echo '</pre>';

    //增加浏览量
    $click_count = $row['click_count'] + 1;
    $sql = "update p_goods set click_count={$click_count} where goods_id={$id}";
    $stmt = mysqli_prepare($link,$sql);
    mysqli_stmt_execute($stmt);
    echo '<hr>';
    echo "商品ID： ". $row['goods_id']; echo '</br>';
    echo "商品名： ". $row['goods_name']; echo '</br>';
    echo "商品价格： ". $row['shop_price'];echo '</br>';
    echo "上架时间： ". date("Y-m-d H:i:s",$row['add_time']);echo '</br>';
    echo "浏览量： ". $row['click_count'];echo '</br>';

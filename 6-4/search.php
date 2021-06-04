<?php

    include "../db.php";
    //商品搜索
    $kw = trim($_GET['k']);

    $sql = "select goods_id,goods_name from p_goods where goods_name like '%{$kw}%' limit 100";
    $res = mysqli_query($link,$sql);
    $rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>搜索结果</title>
</head>
<body>
    <h2>关于 <?php echo $kw;?> 搜索结果</h2>
    <?php
    echo "<ul>";
    foreach($rows as $k=>$v){
        //关键字高亮显示
        $replace = "<span style='color:red'>{$kw}</span>";
        $new_name = str_replace($kw,$replace,$v['goods_name']);

        echo "<li>";
        echo "<a href='goods.php?id={$v['goods_id']}'>{$new_name}</a>";
        echo "</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>

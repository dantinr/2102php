<?php
    include "db.php";

    $sql = "select * from p_goods order by goods_id desc limit 10";

    $res = mysqli_query($link,$sql);
    $rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
    //echo '<pre>';print_r($rows);echo '</pre>';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商品列表页</title>
</head>
<body>
    <ul>
        <?php
            foreach($rows as $k=>$v){
                echo "<li>";
                echo "<a href='goods.php?id={$v['goods_id']}'>{$v['goods_name']}</a>";
                echo "</li>";
            }
        ?>
    </ul>

    <hr>
    <a href="goods_list.php?page=1">上一页</a> |  <a href="goods_list.php?page=2"> 下一页 </a>
</body>
</html>

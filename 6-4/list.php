<?php
    include "../db.php";

    //$sql = "select * from p_goods";
    //$sql = "select goods_id,goods_name from p_goods";
//    $sql = "select goods_id,goods_name from p_goods limit 0,10";            // 第一页
//    $sql = "select goods_id,goods_name from p_goods limit 10,10";           // 第二页
//    $sql = "select goods_id,goods_name from p_goods limit 20,10";           // 第三页

    $page = intval($_GET['page']);
    if($page<1){
        $page = 1;
    }

    $size = 10;             //每一页展示多少数据

    //计算上一页
    $prev = $page - 1;
    if($prev<1){
        $prev = 1;
    }
    //计算下一页
    $next = $page + 1;

    //计算总页数  ceil(总记录数 / $size)
    //获取总记录数
    $sql = "select count(1) as total from p_goods";
    $res = mysqli_query($link,$sql);
    $row = mysqli_fetch_row($res);
    $total_number = $row[0];        //总记录数
    $total_page = ceil($total_number / $size);  //总页数


    $start = ($page - 1) *  $size;              //跳过的行数  从多少行开始
    $sql = "select goods_id,goods_name from p_goods limit {$start},{$size}";
    $res = mysqli_query($link,$sql);
    $rows = mysqli_fetch_all($res,MYSQLI_ASSOC);

    echo "<ul>";
    foreach($rows as $k=>$v){
        echo "<li>";
        echo "<a href='goods.php?id={$v['goods_id']}'>{$v['goods_name']}</a>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href='edit.php?id={$v['goods_id']}'>编辑商品信息</a>";
        echo "</li>";
    }
    echo "</ul>";
?>

<hr>
<a href="list.php?page=1">首页</a> |
<a href="list.php?page=<?php echo $prev;?>">上一页</a> |
<a href="list.php?page=<?php echo $next;?>">下一页</a> |
<a href="list.php?page=<?php echo $total_page;?>">尾页</a> |


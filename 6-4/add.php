<?php

    include "../db.php";
    $id = intval($_GET['id']);      //获取商品id
    $sql = "select * from p_goods where goods_id={$id}";
    $res = mysqli_query($link,$sql);
    $row = mysqli_fetch_assoc($res);
?>

<form action="update.php" method="post">
    <table>
        <caption> <h2>商品编辑</h2></caption>
        <tbody>
        <tr>
            <td>商品ID：</td>
            <td><input type="text" disabled value="<?php echo $row['goods_id'];?>"></td>
        </tr>
        <tr>
            <td>商品名：</td>
            <td><input type="text" value="<?php echo $row['goods_name'];?>"></td>
        </tr>
        <tr>
            <td>商品价格：</td>
            <td><input type="text" value="<?php echo $row['shop_price'];?>"></td>
        </tr>
        <tr>
            <td>商品库存：</td>
            <td><input type="text" value="<?php echo $row['goods_number'];?>"></td>
        </tr>
        <tr>
            <td> </td>
            <td><input type="submit" value="提交"></td>
        </tr>
        </tbody>
    </table>
</form>


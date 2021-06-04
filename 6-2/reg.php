<?php
    if($_POST){
        echo '<pre>';print_r($_POST);echo '</pre>';


        // sql操作

        // 页面跳转 登录
        die;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户注册</title>
</head>
<body>
<form action="reg.php" method="post">
    <input type="text" name="username" placeholder="用户名"> <br>
    <input type="password" name="pass1" placeholder="密码"> <br>
    <input type="password" name="pass2" placeholder="确认密码"> <br>
    <input type="submit" value="注册">
</form>
</body>
</html>

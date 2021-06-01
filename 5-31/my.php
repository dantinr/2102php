<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>个人中心</title>
</head>
<body>
    <?php
        session_start();
        //echo '<pre>';print_r($_SESSION);echo '</pre>';
        echo "登录时间： ". date('Y-m-d H:i:s',$_SESSION['login_time']);
    ?>
</body>
</html>

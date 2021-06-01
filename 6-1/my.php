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
<h1>个人中心</h1>
<a href="logout.php">退出登录</a>
<hr>
    <?php
        include "db.php";
        session_start();
        echo $_SESSION['user']['username'] . "欢迎回来, ";
        echo "最后登录时间： ". date('Y-m-d H:i:s',$_SESSION['login_time']);

        //获取用户登录记录
        $uid = $_SESSION['user']['userid'];
        $sql = "select * from login_history where uid={$uid} order by id desc" ;
        $result = mysqli_query($link,$sql);
        $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
    ?>

    <table border="1" align="center">
        <caption><h2>登录记录</h2></caption>
        <thead>
            <tr>
                <th>登录时间</th><th>登录IP</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach($rows as $k=>$v){
            echo "<tr>";
            echo "<td> ". date('Y-m-d H:i:s',$v['login_time']) ." </td>";
            echo "<td> {$v['login_ip']} </td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>

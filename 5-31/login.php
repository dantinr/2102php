<?php
    session_start();
    //接收 form表单数据 $_POST, 验证是否符合规则
    //处理变量
    $value = trim($_POST['u']);         //可以是 username、email、mobile
    $upass = trim($_POST['pass']);


    // 使用mysqli连接 MySQL
    $host = "127.0.0.1";        // Mysql的主机地址
    $user = 'root';             //数据库的用户名
    $pass = '123456abc';        // 数据库密码
    $db = "php2102";            //使用的数据库

    // 连接数据库
    $link = new mysqli($host, $user, $pass, $db);


    // sql语句
    $sql = "select * from users where username='{$value}' or email='{$value}' or mobile='{$value}'";

    //查询
    $result = mysqli_query($link,$sql);
    //获取结果
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

    if(empty($rows)){           //没有这个用户
        die("查无此人");
    }

    //验证密码  password_verify()
    if( password_verify($upass,$rows[0]['pass']) ){

        $now = time();
        //将用户信息写入 session
        $_SESSION['user']= $rows[0];
        //将登录时间记录到session中
        $_SESSION['login_time'] = $now;
        //将uid写入浏览器cookie
        setcookie('uid',$rows[0]['userid']);

        //更新用户最后一次登录时间
        $sql = "update users set last_login_time={$now} where userid={$rows[0]['userid']}";
        //执行sql
        $stmt = mysqli_prepare($link,$sql);
        $result = mysqli_stmt_execute($stmt);

        //记录登录信息
        $uid = $rows[0]['userid'];      //用户id
        $login_time = $now;             //登录时间
        $login_ip = $_SERVER['REMOTE_ADDR'];        //用户登录IP
        $ua = $_SERVER['HTTP_USER_AGENT'];          //浏览器信息

        $sql = "insert into login_history (`uid`,`login_time`,`login_ip`,`ua`) 
values ($uid,$login_time,'{$login_ip}','{$ua}')";
        echo $sql;die;
        $stmt = mysqli_prepare($link,$sql);
        $result = mysqli_stmt_execute($stmt);

        //页面跳转
        echo "登录成功，正在跳转至个人中心";
        header('Refresh:2;url=my.php');

    }else{
        echo "密码不正确";
    }







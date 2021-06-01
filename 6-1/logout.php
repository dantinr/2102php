<?php
    //退出登录

    //清除 session中用户信息
    session_start();
    unset($_SESSION['user']);
    session_destroy();

    //清除 cookie中信息
    setcookie('uid',"",time()-3600);
    header('Refresh:2;url=login.html');
    die("已成功退出");


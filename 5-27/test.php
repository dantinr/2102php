<?php
    //接收 POST传参
    echo '<pre>';print_r($_POST);echo '</pre>';

    //获取用户名
    $user_name = $_POST['u_name'];
    //验证用户名是否符合用户名规则   大小写英文字母 不少于6
    $patten = "/^[a-zA-Z]{6,}$/";

    if( !preg_match($patten,$user_name) ){
        echo "用户名不符合规则";
    }




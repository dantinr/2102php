<?php
    //接收 POST传参
    if(empty($_POST)){
        die("没有提交数据");
    }

    $user_info = [];
    //判断字段不能为空
    foreach($_POST as $k=>$v){
        $input = trim($v);      //去空格
        if( empty($input) ){
            die( $k." 字段不能为空");
        }
        //用户信息保存在新数组中
        $user_info[$k] = $input;
    }

    echo '<hr>';
    echo '<pre>';print_r($user_info);echo '</pre>';


    //验证用户名是否符合用户名规则   大小写英文字母 不少于6
    $patten = "/^[a-zA-Z]{6,}$/";
    if( !preg_match($patten,$user_info['u_name']) ){
        die("用户名不符合规则");
    }

    //验证Email
    if( !filter_var($user_info['u_email'],FILTER_VALIDATE_EMAIL) ){
        die("EMail不符合规则");
    }

    //验证手机号
    $patten = "/^1[34578]\d{9}$/";
    if( !preg_match($patten,$user_info['u_mobile']) ){
        die("手机号不符合规则");
    }

    //验证密码
    if($user_info['u_pass1'] !== $user_info['u_pass2']){
        die("密码与确认密码不一致");
    }


    echo "注册成功";





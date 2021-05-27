<?php

    $arr = [
        ["name"=>"zhangsan","age"=>11,"email"=>"zhangsan@qq.com"],
        ["name"=>"lis","age"=>22,"email"=>"lisi@qq.com"],
        ["name"=>"wangwu","age"=>33,"email"=>"wangwu@qq.com"],
        ["name"=>"zhaoliu","age"=>44,"email"=>"zhaoliu@qq.com"],
    ];

    echo '<pre>';print_r($arr);echo '</pre>';

    $arr_age = array_column($arr,"age");
    $arr_name = array_column($arr,"name");
    echo '<pre>';print_r($arr_age);echo '</pre>';
    echo '<pre>';print_r($arr_name);echo '</pre>';

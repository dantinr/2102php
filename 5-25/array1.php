<?php

    //定义一个数组
    $arr1 = array(
        "name"  => "zhangsan",
        "age"   => 11,
        "sex"   => "男"
    );

    $arr2 = [
        "name"  => "lisi",
        "age"   => 22,
        "sex"   => "女",
        101     => "aaa",
        102     => "bbb",
    ];

    echo $arr2["age"];      // 22
    //echo $arr1;
    echo "\n";
    echo $arr2[102];        // bbb
    echo "\n";
    var_dump($arr2);
    echo "\n";
    print_r($arr2);

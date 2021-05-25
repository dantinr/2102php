<?php

    //定义一个数组
    $arr1 = [123,214,213,56,33,11,789,'a','hello',"php"];

    //遍历数组
    foreach($arr1 as $k=>$v){
        if($k==3){
            continue;           // continue 跳过本次循环
        }
        if($k==5){
            die;                // die 程序停止或退出
        }
        echo '$k= '. $k .  '+++++ $v=' . $v . "\n";         // 第一次遍历  $k=0, $v=123
    }
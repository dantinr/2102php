<?php
    $arr = ["zhangsan","lisi","Baby","Mike","Abc","John","Jack","Zhaoliu"];

    echo '<pre>';print_r($arr);echo '</pre>';
    $k = array_rand($arr,3);
    echo '<pre>';print_r($k);echo '</pre>';

    echo $arr[$k[0]];echo '</br>';
    echo $arr[$k[1]];echo '</br>';
    echo $arr[$k[2]];
    die;
    echo '<pre>';print_r($arr);echo '</pre>';
    $k = array_rand($arr);      //随机一个key
    echo "随机的key是： ". $k;echo '</br>';
    echo $arr[$k];


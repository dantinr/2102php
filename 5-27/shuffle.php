<?php
    $arr = ["zhangsan","lisi","Baby","Mike","Abc","John","Jack","Zhaoliu"];

    echo '<pre>';print_r($arr);echo '</pre>';
    shuffle($arr);      //打乱数组顺序
    echo '<pre>';print_r($arr);echo '</pre>';

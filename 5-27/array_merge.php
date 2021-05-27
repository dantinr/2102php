<?php
    $arr1 = ["zhangsan","lisi","wangwu"];
    $arr2 = ["aaa",'bbb','ccc'];

    echo '<pre>';print_r($arr1);echo '</pre>';
    echo '<pre>';print_r($arr2);echo '</pre>';
    $arr3 = array_merge($arr1,$arr2);
    echo '<pre>';print_r($arr3);echo '</pre>';

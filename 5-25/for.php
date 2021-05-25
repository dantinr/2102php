<?php
    $arr1 = [123,214,213,56,33,11,789,'a','hello',"php"];
    $arr2 = [
        "name"  => "zhangsan",
        "age"   =>  22
    ];

    //获取数组的长度
    $length = count($arr1);

    for($i=0;$i<$length;$i++){
        echo 'i='. $i , '>>>' . $arr1[$i] . "\n";         // 根据下标访问 数组中的元素
    }
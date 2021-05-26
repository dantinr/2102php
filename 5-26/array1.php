<?php
    $arr1 = ["zhangsan","lisi","wangwu","zhaoliu"];
    // $arr1 = [[],[],[],[]]

    //关联数组
    $arr2 = [
        "name" => "zhangsan",
        "age"   => 11,
        "email" => "zhangsan@qq.com"
    ];


    //二维数组
    $arr3 = [
        ["name"=>"zhangsan","age"=>11],
        ["name"=>"lisi","age"=>22],
        ["name"=>"wangwu","age"=>33],
        ["name"=>"zhaoliu","age"=>44],
    ];

    //获取$arr3中的某个元素
    //echo $arr3[1];
//    echo "<pre>";
//    print_r($arr3);
//    echo "</pre>";

    $arr4 = [
        "p1"    => ["name"=>"zhangsan","age"=>11],
        "p2"    => ["name"=>"lisi","age"=>22],
        "p3"    => ["name"=>"wangwu","age"=>33],
        "p4"    => ["name"=>"zhaoliu","age"=>44],
    ];

    echo $arr4['p2']['name'];

    foreach($arr4 as $k=>$v){
        echo "姓名: ". $v['name'];
        echo " === 年龄:" . $v['age'];echo '</br>';
    }




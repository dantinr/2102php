<?php

    //时间戳转 年月日
    $now = time();          //获取当前unix时间戳
    echo $now;          // 1622512233
    echo '</br>';
    echo date("Y-m-d H:i:s",$now); echo '</br>';

    //将 年月日 时分秒转为 unix时间戳
    $ymd = '2021-06-01 09:51:50';
    echo "年月日： ". $ymd;echo '</br>';
    echo "转为时间戳：" . strtotime($ymd);



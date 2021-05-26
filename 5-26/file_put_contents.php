<?php

    //向文件中写入内容
    $f = "./test";
    $data = "Hello PHP";
    echo file_put_contents($f,$data);           //清空写

    //追加写   原文件中的内容还在，追加写入


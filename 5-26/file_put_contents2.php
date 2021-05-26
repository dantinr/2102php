<?php
    $data = "XXXXXX";
    $f = "./test";

    //追加写入
    echo file_put_contents($f,$data,FILE_APPEND);

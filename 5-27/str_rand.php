<?php
    //生成随机字符串  $length是 返回的字符串长度
    function str_rand($length=8){
        $str0 = 'ABCDEFGHIJKMNPQRSTYVWXYZabcdefghijkmnpqrstuvwxyz23456789';
        $str = "";
        for($i=0;$i<$length;$i++){
            $num = mt_rand(0,55);
            $c = $str0[$num];
            $str .= $c;
        }
        return $str;
    }

    var_dump(str_rand());


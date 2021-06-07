<?php
    // 包含类文件
    include "bird.php";
    include "cat.php";
    include "dog.php";


    $b = new Bird();
    var_dump($b);
    echo '<hr>';
    $c = new Cat();
    var_dump($c);
    echo '<hr>';
    $d = new Dog();
    var_dump($d);
    echo '<hr>';


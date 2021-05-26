<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>列表</title>
</head>
<body>

<?php
    $list = [
        'AAAAA',
        'BBBBB',
        'CCCCC',
        'DDDDD',
        'EEEEE'
    ];
?>

<ul>
    <li>XXXXXX</li>
    <li>ZZZZZZ</li>

    <?php
    foreach($list as $k=>$v){
        echo "<li>".$v."</li>";
    }
    ?>

</ul>
</body>
</html>
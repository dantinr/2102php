<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>表格</title>
</head>
<body>

<ul>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>
<table border="1">
    <thead>
    <tr>
        <th>姓名</th><th>年龄</th><th>Email</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $list = [
            ["name"=>"zhangsan","age"=>11,"email"=>"zhangsan@qq.com"],
            ["name"=>"lisi","age"=>22,"email"=>"lisi@qq.com"],
            ["name"=>"wangwu","age"=>33,"email"=>"wangwu@qq.com"],
            ["name"=>"zhaoliu","age"=>44,"email"=>"zhaoliu@qq.com"],
        ];

        foreach($list as $k=>$v){
            echo "<tr>
                    <td>".$v['name']."</td><td>".$v['age']."</td><td>".$v['email']."</td>
                  </tr>";
        }
    ?>

    </tbody>
</table>
</body>
</html>

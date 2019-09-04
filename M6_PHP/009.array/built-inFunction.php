<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>
    count(): đếm số phần tử trong mảng
    is_array(); Ktra 1 biến có phải mảng hay ko
    empty(): Kiểm tra 1 mảng xem có rỗng hay không
</pre>
</body>
</html>
<?php
$arr = array(1,3,4,5);
echo count($arr);
echo "<br>";
echo var_dump(is_array($arr));
echo "<br>";
echo var_dump(empty($arr));
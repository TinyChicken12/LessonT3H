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
<form method="get" action="">
    <p>Name: <input type="text" name="name" value=""></p>
    <p>Age: <input type="text" name="age" value=""></p>
    <p>Address: <input type="text" name="address" value=""></p>
    <input type="submit" value="Gui">
    <p><?php echo ShowInfo() ?></p>
</form>
</body>
</html>

<?php
/*$name = "";
$age = "";
$addr = "";*/

function ShowInfo()
{
    $name = $_GET['name'];
    $age = $_GET['age'];
    $addr = $_GET["address"];
    if (isset($name) && isset($age) && isset($addr)) {
        return $name . "<br>" . $age . "<br>" . $addr . "<br>";
    }
}

?>
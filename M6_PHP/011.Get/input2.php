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
    <form action="" method="get">
        <p><input type="text" name="username" placeholder="username"></p>
        <p><input type="text" name="email" placeholder="email"></p>
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
?>

<?php
    if (!empty($_GET)){
        echo "<pre>";
        var_dump($_GET);
        echo "</pre>";
    }
?>


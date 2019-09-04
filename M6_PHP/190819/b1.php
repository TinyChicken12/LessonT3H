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
<?php
$gender = 1;
$location =10;
?>
<form method="post" action="">
    <select>
        <option value="1" <?php if ($location == 1) echo "selected" ?>>bac ninh</option>
        <option value="2" <?php if ($location == 2) echo "selected" ?>>bac giang</option>
        <option value="3" <?php if ($location == 3) echo "selected" ?>>quang ninh</option>
        <option value="4" <?php if ($location == 4) echo "selected" ?>>hai phong</option>
        <option value="5" <?php if ($location == 5) echo "selected" ?>>nam dinh</option>
        <option value="6" <?php if ($location == 6) echo "selected" ?>>thanh hoa</option>
        <option value="7" <?php if ($location == 7) echo "selected" ?>>nghe an</option>
        <option value="8" <?php if ($location == 8) echo "selected" ?>>lao cai</option>
        <option value="9" id="9" <?php if ($location == 9) echo "selected" ?>>ha nam</option>
        <option value="10" id ="10" <?php if ($location == 10) echo "selected" ?>>ha noi</option>
    </select>
    <br>
    Nu<input type="radio" name="gender" value="0" <?php
        if ($gender==0) echo "checked";
    ?>> <br>
    Nam<input type="radio" name="gender" value= "1" <?php
    if ($gender==1) echo "checked";
    ?>>
    <br>
</form>
</body>
</html>


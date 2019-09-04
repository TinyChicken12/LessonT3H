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
$locations = array();
$locations[1] = "bac ninh";
$locations[2] = "bac giang";
$locations[3] = "quang ninh";
$locations[4] = "hai phong";
$locations[5] = "nam dinh";
$locations[6] = "thanh hoa";
$locations[7] = "nghe an";
$locations[8] = "lao cai";
$locations[9] = "ha nam";
$locations[10] = "ha noi";

$location =10;
$gender = 1;
?>

<form action="" method="post">
   <select>
       <?php foreach ($locations as $key => $value) {
       echo "<option>"; ?> <?php
           echo "$value";
           ?> <?php echo "</option>";
           ?>
           <?php
       }
       ?>
   </select>
</form>
</body>
</html>

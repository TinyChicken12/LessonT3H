<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Giải phương trình bậc hai</h1>
<form action="" method="post">
    <input type="text" name="num1">x^2 +
    <input type="text" name="num2">x +
    <input type="text" name="num3"> = 0
    <br>
    <br>
    <input type="submit" name="submit" value="Tính">
</form>

<?php
function giaiPt($num1, $num2, $num3){
    if ($num1 == 0){
        if ($num2 == 0){
            if ($num3 == 0){
                echo "pt co vo so nghiem";
            } else {
                echo "pt vo nghiem";
            }
        } else {
            echo "pt co nghiem la: " . (-$num3/$num2);
        }
    } else{
        $delta = $num2**2 - 4* $num1 * $num3;
        if ($delta < 0){
            echo "pt vo nghiem";
        } else {
            echo "pt co nghiem la: " . (-$num2 + sqrt($delta))/(2* $num1) . "<br>";
            echo "pt co nghiem la: " . (-$num2 - sqrt($delta))/(2* $num1);
        }

    }
}

if(isset($_POST["num1"]) && isset($_POST["num2"] )){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    giaiPt($num1, $num2, $num3);
}
?>
</body>
</html>
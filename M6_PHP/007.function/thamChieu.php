<?php
function add(&$x)
{ //đặc điểm của tham trị là thêm dấu "&" trước biến
    $x++;
    return $x;
}

$x = 1;
echo add($x); //2
echo "<br>";
echo $x; //2
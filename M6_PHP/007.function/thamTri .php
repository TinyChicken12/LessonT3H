<?php
$x = 1;
function add($x){
    $i = $x;
    $i++;
    return $i;
}
echo add($x); //2
echo "<br>";
echo $x; // 1
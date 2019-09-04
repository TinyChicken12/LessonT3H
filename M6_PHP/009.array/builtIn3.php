<?php

$array = array();
$array["hn"] = "Ha Noi";
$array["tb"] = "Thai Binh";
$array["nd"] = "Nam Dinh";
$array["5"] = "Nghe An";
echo "<pre>";
print_r($array);
echo "</pre>";

$newArray = array_keys($array);
echo "<pre>";
print_r($newArray);
echo "</pre>";
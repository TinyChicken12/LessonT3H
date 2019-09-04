<?php
//Tao mang
// cach 1
$arr = array("Hoa", "Hue", "Hong");

//cach 2
$arr = array();
$arr[] = "Hoa";
$arr[] = "Hue";
$arr[] = "Hong";

//cach 3
$arr = array(0 => "Hoa", 1=>"Hue", 2=> "Hong");

//cach 4
$arr = array();
$arr[0] = "Hoa";
$arr[1] = "Hue";
$arr[2] = "Hong";

//foreach tung phan tu trong mang
foreach($arr as $key => $value){
    echo "<br>" . $key . "-" . $value;
}

echo "<br>";
//foreach kieu khac chi in value
foreach($arr as $value){
    echo "<br>" . $value;
}
<?php
$arr = array(
    "china" => array(
        "name"=>"trung quoc",
        "city"=>array(
            "thuong hai", "tham quyen", "thanh do"
        )
    ),
    "vietnam"=> array( "name"=>"viet nam",
        "city"=>array(
            "ha noi", "tp ho chi minh", "thai binh"
        )
    ),
    "korea"=> array( "names"=>"han quoc",
        "city" => array(
            "seul"
        )
    )
);
foreach ($arr as $key => $value){
    if($key == "city"){
        foreach ($key as $value1){
            echo $value1 . "<br>";
            echo isset($value1);
        }
    }
}
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
echo "<pre>";
print_r($arr);
echo "</pre>";

echo "<br>";
//truy xuat cac phan tu cua mang
echo $arr["china"]["city"][0]. "<br>";
echo $arr["china"]["city"][1]. "<br>";
echo $arr["china"]["city"][2];
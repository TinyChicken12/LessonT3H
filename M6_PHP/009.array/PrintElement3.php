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
    "korea"=> array( "name"=>"han quoc",
        "city" => array(
            "seul"
        )
    )
);

echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<br>";

foreach ($arr as $keyCountry => $country){
    echo "<ul>" . "<li>" . $keyCountry . "</li>";
    foreach ($country as $key => $city) {

        if ($key != "name") {  //Ở đây có thể dùng hàm is_array để thay cho điều kiện
            foreach ($city as $value) {
                echo "<li>" . $value . "</li>";
            }
        }
    }
    echo "</ul>";
}
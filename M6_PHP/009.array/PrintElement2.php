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
//In ra tên thành phố
foreach ($arr as $keyCountry => $country){
   foreach ($country as $keyCity => $city){
       if($keyCity == "city"){
           foreach ($city as $value){
                echo "<br>" . $value;
           }
       }
   }
};

echo "<br>";
foreach ($arr as $keyCountry => $country){
    echo "<ul>" . "<li>" . $keyCountry;
    foreach ($country as $keyCity => $city){
        foreach ($city as $value){
            echo $value . "</li>" . "</ul>" . "<br>";
        }
    }
}
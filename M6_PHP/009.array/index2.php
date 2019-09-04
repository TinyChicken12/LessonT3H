<?php
$array = array();
$array["hn"] = "Ha Noi";
$array["tb"] = "Thai Binh";
$array["nd"] = "Nam Dinh";
$array["5"] = "Nghe An";
echo "<pre>";
print_r($array);
echo "</pre>";

//cach 2:
$array = array("hn"=> "ha Noi", "tb" => "Thai Binh", "nd" =>"Nam Dinh", "5"=>"Nghe An");

//truy xuat phan tu theo key
$array["hn"];
$array["tb"];
$array["nd"];
$array["5"];

//gan value
$array["hn"] = "Ha Noi 1";
$array["tb"] = "Thai Binh que toi";
$array["nd"] = "Nam Dinh que Phat";
$array["5"] = "Nghe An que Khanh";

echo "<pre>";
print_r($array);
echo "</pre>";

//foreach in gia tri cac phan tu trong mang
foreach($array as $value){
    echo "<br>" . $value;
}
echo "<br>";
//foreach in gia tri phan tu va key cua no
foreach ($array as $key => $value){
    echo "<br>" . $key . "-" . $value;
}
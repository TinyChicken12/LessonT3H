<?php
$date = date('d');
echo $date;
echo "<br>";
switch ($date) {
    case 01 :
        echo "Ngay dau tien cua thang";
        break;
    case 15 :
        echo "Ngay giua cua thang";
        break;
    case 30:
        echo "Ngay cuoi thang";
        break;
    case 31 :
        echo "Ngay cuoi thang";
        break;
    default:
        echo "Ngay thuong";
}
<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
echo $date = date('d-m-Y H:i:s') . "<br>";
echo date('\T\i\m\e \N\o\w \i\s d-m-Y H:i:s') . "<br>";
echo strtotime(date("d-m-Y H:i:s")) . "<br>";
echo strtotime($date) . "<br>";   //Đổi giờ sang kiểu int

$date_cre = date_create("2019/01/19");  //Tạo ngày mới
echo date_format($date_cre, "Y-m-d H:i:s") . "<br>";  //Đổi định dạng ngày giờ

echo "<br>";

date_modify($date_cre, "+11 days");  //Cộng thêm 11 days cho biến ngày date_cre
echo date_format($date_cre, "Y-m-d") . "<br>";

echo "<pre>";
    print_r(getdate());  //Hàm getdate() trả dữ liệu về dạng mảng
echo "</pre>";

echo "<br>";
print_r(getdate());
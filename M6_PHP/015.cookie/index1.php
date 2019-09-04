<?php
$cookie_name = "user";
$cookie_value = "KienTa";

setcookie($cookie_name, $cookie_value, time() + 3600, "/");  //set cookie

echo "<pre>";
    print_r($_COOKIE);
echo "</pre>";

//Xoa cookie
setcookie($cookie_name, $cookie_value, time() - 3600, "/");  //Dùng đối số là thời gian đã hết hạn (1h trước) để hủy cookie

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
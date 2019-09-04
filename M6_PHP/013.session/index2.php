<?php
session_start();  //Luôn luôn khởi tạo session ở đầu như câu này nếu muốn sử dụng session
?>

<?php
//Gán các giá trị cho biến session qua các key
$_SESSION["name"] = "Pham Manh Linh";
$_SESSION["age"] = 22;
$_SESSION ["address"] = "Nam Tu Liem, Ha Noi";

//In ra thông tin biến session sau khi được gán (in nội dung)
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

//Sửa session chỉ việc overwrite nó:
$_SESSION["married"] = 1;
//In ra thông tin biến session sau khi được gán (in nội dung)
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

//Xóa session dùng hàm unset
unset($_SESSION["married"]);
//In ra thông tin biến session sau khi được gán (in nội dung)
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// remove all session variables
session_unset();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

//destroy the session
session_destroy();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>


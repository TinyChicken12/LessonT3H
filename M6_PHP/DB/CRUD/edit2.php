<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php
//Nạp file config vào
include_once "config.php";

//Lấy thằng cần sửa ra từ url
$id = $_GET["id"];
$querySelect = "SELECT * FROM employees WHERE id = " . $id;
$result = $connect->query($querySelect);
$row = $result->fetch_assoc();

$errors = array();
if (isset($_POST) && !empty($_POST) && isset($_POST["employee_id"])){
    if (!isset($_POST["name"]) || empty($_POST["name"])) {
        $errors[] = "Ten nhan vien khong hop le";
    }

    if (!isset($_POST["address"]) || empty($_POST["address"])) {
        $errors[] = "Dia chi nhan vien khong hop le";
    }

    if (!isset($_POST["salary"]) || empty($_POST["salary"])) {
        $errors[] = "Luong nhan vien khong hop le";
    }
}

if(!empty($errors)){
    $id = $_POST["employee_id"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $salary = $_POST["salary"];

    $sqlUpdate = "UPDATE employees SET name = $name";
}





?>


<form action="" method="post">
<h1>Sửa nhân viên</h1>
    <p>Tên nhân viên: <input type="text" name="name"></p>
    <p>Địa chỉ nhân viên: <input type="text" name="address"></p>
    <p>Lương nhân viên: <input type="number" name="salary"></p>
    <input type="submit" value="Sửa nhân viên">
</form>
</body>
</html>


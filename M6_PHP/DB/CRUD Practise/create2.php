<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
include_once "config.php";

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="">
                <br>
                <div class="form-group"><label>Ten nhan vien: </label><input type="text" name="name"
                                                                             class="form-control"></div>
                <div class="form-group"><label>Dia chi: </label><input type="text" name="address" class="form-control">
                </div>
                <div class="form-group"><label>Luong: </label><input type="number" name="salary" class="form-control">
                </div>
                <div class="form-group"><input type="submit" value="Them moi nhan vien" class="btn btn-success"
                                               class="form-control">
                    <a href="index4.php" class="btn btn-success">Trang chu</a></div>
            </form>
        </div>
    </div>
</div>

<?php
$errors = array();

//Kiểm tra khi bất cứ 1 trường nào dk điền
$flag = "";
if (isset($_POST) && !empty($_POST)) {
    if (!isset($_POST["name"]) || empty($_POST["name"])) {
        $errors[] = "Vui long nhap ten"; //Cú pháp thêm phần tử vào cuối mảng
    }

    if (!isset($_POST["address"]) || empty($_POST["address"])) {
        $errors[] = "Vui long nhap dia chi";
    }

    if (!isset($_POST["salary"]) || empty($_POST["salary"])) {
        $errors[] = "Vui long nhap luong";
    }

    echo implode("<br>",$errors);  //Hàm chuyển array thành string và phân cách bởi dấu xuống dòng

    $flag = true;  //Đặt flag ở đây để đỡ phải khai báo lại biến của các trường kiểm tra các trường đã được nhập
}

if ($flag && empty($errors)) {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $salary = $_POST["salary"];
    $sqlInsert = "INSERT INTO `employees`(`name`, `address`, `salary`) VALUES ('$name','$address', $salary)";
    $result = $connection->query($sqlInsert);
    echo "Them moi thanh cong";
}

if(!empty($errors)){
    echo "<br>" . "Them moi that bai";
}

?>
</body>
</html>
<?php

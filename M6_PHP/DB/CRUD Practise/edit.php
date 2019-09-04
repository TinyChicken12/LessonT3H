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
include_once "config.php";
$id = $_GET["id"];  //Khá quan trọng, lấy id từ url mà thằng idex từ trang index trỏ đến
$errors = array();
$sqlSelect = "SELECT * FROM employees WHERE id= $id";
$result= $connection->query($sqlSelect);

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

$result = $connection->query($sqlSelect);
$row = $result->fetch(PDO::FETCH_ASSOC);
if($flag && empty($errors)){
    $name = $_POST["name"];
    $address = $_POST["address"];
    $salary = $_POST["salary"];
    $sqlUpdate = "UPDATE employees SET name = '$name', address = '$address', salary = $salary WHERE id=$id";
    $result2 = $connection->query($sqlUpdate);
    echo "Sua nhan vien thanh cong";
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="">
                <br>
                <div class="form-group"><label>
                        <input type="hidden" name="id">
                    </label>
                </div>
                <div class="form-group"><label>Ten nhan vien: </label><input type="text" name="name" class="form-control"
                    value="<?php echo $row['name']?>"
                    >
                </div>
                <div class="form-group"><label>Dia chi: </label><input type="text" name="address" class="form-control"
                                                                       value="<?php echo $row['address']?>"
                    >
                </div>
                <div class="form-group"><label>Luong: </label><input type="number" name="salary" class="form-control"
                    value="<?php echo $row['salary']?>"
                    >
                </div>
                <div class="form-group"><input type="submit" value="Sua nhan vien" class="btn btn-success"
                                               class="form-control">
                    <a href="index4.php" class="btn btn-success">Trang chu</a></div>
            </form>
        </div>
    </div>
</div>
</body>
</html>


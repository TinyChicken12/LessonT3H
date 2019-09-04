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
$row = $result->fetch(PDO::FETCH_ASSOC);
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Xoa nhan vien</h1>
            <form method="post" action="">
                <div class="form-group"><label>
                        <input type="hidden" name = "employees_id" value= <?php echo $row['id']?>
                    </label>
                </div>
                <div class="form-group"><label>Xoa nhan vien:</label> <?php echo $row['name'] . "?" ?>
                </div>
                <div class="form-group"><input type="submit" value="Xoa" class="btn btn-danger" name="delete">
                    <a class="btn btn-success" href="index4.php">Trang chu</a>
                </div>

        </div>
    </div>
</div>

<?php
//Kiểm tra khi bất cứ 1 trường nào dk điền
$flag = "";
if (isset($_POST) && !empty($_POST)) {
    if (!isset($_POST["employees_id"]) || empty($_POST["employees_id"])) {
        $errors[] = "Id khong hop le"; //Cú pháp thêm phần tử vào cuối mảng
    }

    echo implode("<br>",$errors);  //Hàm chuyển array thành string và phân cách bởi dấu xuống dòng

    $flag = true;  //Đặt flag ở đây để đỡ phải khai báo lại biến của các trường kiểm tra các trường đã được nhập
}


//$flag2 = "";
if($flag){
    $id = $_POST["employees_id"];
    $sqlDelete = "DELETE FROM employees WHERE id=$id";
    $result2 = $connection->query($sqlDelete);
    echo "Xoa nhan vien thanh cong";
    //$flag2 = true;
}// else echo "Xoa nhan vien that bai";

if(!empty($errors)){
    echo "Xoa nhan vien that bai";
}

?>

</body>
</html>


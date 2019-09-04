<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Thêm mới nhân viên</h1>
            <form method="post" action="">
                <p><input type="submit" value="Thêm mới" class="btn btn-success"></p>
                <p><input type="text" name="name" placeholder="Ten"></p>
                <p><input type="text" name="address" placeholder="Dia chi"></p>
                <p><input type="number" name="salary" placeholder="Luong"></p>
            </form>
        </div>
    </div>
</div>

<?php
include_once "config.php";
//Kiem tra validate tung truong
if(!empty($_POST)) {
    $error = array();
    $name =  $_POST["name"];
    if(empty($name)) $error = ["Ten khong hop le"];
    $address = $_POST["address"];
    if(empty($address)) $error = ["Dia chi khong hop le"];
    $salary= $_POST["salary"];
    if(empty($luong)) $error = ["Luong khong hop le"];

    $error_string = implode("<br>", $error);
    echo "<div class = 'alert alert-danger'>$error_string</div>";

    $query = "INSERT INTO employees (name, address, salary) VALUES ('$name','$address',$salary)";
    $result = $connect->query($query);
}

?>

<div class="alert alert-success"><?php if($result) echo "Thêm mới nhân viên thành công"?></div>
</body>
</html>
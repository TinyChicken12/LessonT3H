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
//$sqlInsert = "INSERT INTO employees VALUES ($name, $address, $salary)";
//$result = $connection->query($sqlInsert);
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
                                               class="form-control"></div>
            </form>
        </div>
    </div>
</div>

<?php
//$errors = array();
if ($_POST) {
    if (!$_POST["name"]) {
        echo "Vui long nhap ten" . "<br>";
    }elseif (!$_POST["address"]) {
        echo "Vui long nhap dia chi" . "<br>";
    }elseif (!$_POST["salary"]) {
        echo "Vui long nhap luong" . "<br>";
    } else {

    }
}


?>


</body>
</html>
<?php

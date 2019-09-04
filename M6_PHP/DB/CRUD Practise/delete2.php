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
$id = $_GET["id"];
$errors =  array();
$sqlSelect = "SELECT * FROM employees where id= $id";
$result = $connection->query($sqlSelect);
$row = $result->fetch(PDO::FETCH_ASSOC);

if(isset($_POST) && !empty($_POST) && isset($_POST["employee_id"])){
    if(!isset($_POST["employee_id"]) || empty($_POST["employee_id"])){
        $errors[] =  "Id nhan vien khong hop le";
    }

    if(empty($errors)){
        $id = $_POST["employee_id"];
        $sqlDelete = "DELETE FROM employees WHERE id = $id";
        $result = $connection->query($sqlDelete);

        if($result){
            echo "<div class='alert alert-success'>Xoa nhan vien thanh cong!</div>";
        } else {
            echo "<div class='alert alert-danger'>Xoa nhan vien that bai!</div>";
        }
    } else {
        $errors_string = implode("<br>",$errors);
        echo "<div class='alert alert-danger'>$errors_string</div>";
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Xoa nhan vien</h1>
            <form method="post" action="">
                <div class="form-group">
                    <input type="hidden" name="employee_id" value=<?php echo $row["id"];
                    ?>>
                    <?php var_dump($row['id']) ?>
                </div>
                <div class="form-group">
                    Xoa nhan vien: <?php echo $row["name"];
                    var_dump($row['name']);
                    ?>

                </div>
                <input type="submit" value="Xoa" class="btn btn-danger">
                <a class="btn btn-success" href="index4.php">Trang chu</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<?php

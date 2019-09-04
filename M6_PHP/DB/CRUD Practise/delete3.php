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
$errors = array();
$id = (int) $_GET["id"];
$sqlSelect = "SELECT * FROM employees where id= $id";  //T THỀ LÀ T THIẾU CÁI WHERE ID = CHUỐI VC, cẩn thận hơn, gõ chậm hơn
$result = $connection->query($sqlSelect);
$row = $result->fetch(PDO::FETCH_ASSOC);
?>

<?php
if(isset($_POST) && !empty($_POST) && isset($_POST["employee_id"])){
    if(!isset($_POST["employee_id"]) || empty($_POST["employee_id"])) {
        $errors[] = "Id khong hop le";
    }

    if(empty($errors)){
        $id = (int) $_POST["employee_id"];
        $sqlDelete = "DELETE FROM employees WHERE id= $id";
        $result= $connection->query($sqlDelete);
        echo $sqlDelete;

        if($result == true){
            echo "Xoa nhan vien thanh cong";
        } else {
            echo "Xoa nhan vien that bai";
        }
    }else {
        $errors_str = implode("<br>", $errors);
        echo $errors_str;
    }
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Xoa nhan vien</h1>
            <form action="" method="post">
                <div class="form-group">
                    <input type="hidden" name="employee_id" value=<?php echo $id?>
                    </div>
                    <?php var_dump($id)?>
                    <div class="form-group">
                        Ten nhan vien: <?php echo $row['name']?>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Xoa" class="btn btn-danger">
                        <a class="btn btn-success" href="index4.php">Trang chu</a>
                    </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>



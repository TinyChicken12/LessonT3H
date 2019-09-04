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
$query = "SELECT * FROM employees";
$result = $connect->query($query);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liệt kê danh sách nhân viên</h1>
            <h1><a href="create.php" class="btn btn-success">Thêm nhân viên</a></h1>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Địa chỉ</th>
                    <th>Lương</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if($result->num_rows >0)
                    while($row = $result->fetch_assoc()){
                    ?>
                <tr>
                    <td><?php echo $row["id"]?></td>
                    <td><?php echo $row["name"]?></td>
                    <td><?php echo $row["address"]?></td>
                    <td><?php echo $row["salary"]?></td>
                    <td>
                        <p><a class="btn btn-warning" href="edit.php?id=<?php echo $row['id']?>">Sửa nhân viên</a> </p>
                        <p><a class="btn btn-danger" href="deleteThay.php?id=<?php echo $row['id']?>">Xóa nhân viên</a></p>
                    </td>
                </tr>
                <?php
                } else {
                    echo "Không tồn tại nhân viên nào";
                }

                ?>

                </tbody>
            </table>
        </div>
    </div>

</div>

</body>
</html>

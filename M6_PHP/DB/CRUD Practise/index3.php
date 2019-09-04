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
//Nap file ket noi database vao
include_once "config.php";

$sqlSelect = "SELECT * FROM employees";
$result = $connection->query($sqlSelect);
if ($row = $result->rowCount() > 0) {
    ?>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liet ke danh sach nhan vien</h1>
            <h1 class="btn btn-success">Them moi nhan vien</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Ten</th>
                    <th>Dia chi</th>
                    <th>Luong</th>
                    <th>Hanh dong</th>
                </tr>
                </thead>
                <?php
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <table class="table">
                <tbody>
                        <tr>
                            <td><?php echo $row["id"]?></td>
                            <td><?php echo $row["name"]?></td>
                            <td><?php echo $row["address"]?></td>
                            <td><?php echo $row["salary"]?></td>
                            <td>
                                <p><a href="edit.php?id= <?php echo $row["id"]?>" class="btn btn-warning">Sua nhan vien</a></p>
                                <p><a href="delete3.php?id=<?php echo $row["id"]?>" class="btn btn-danger">Xoa nhan vien</a></p>
                            </td>
                        </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <?php
    }
    ?>


    <?php
} else {
    echo "Khong co nhan vien nao";
}
?>
</body>
</html>
<?php

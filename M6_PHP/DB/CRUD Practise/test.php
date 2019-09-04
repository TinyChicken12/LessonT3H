<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Xoa nhan vien</h1>
            <form method="post" action="">
                <div class="form-group">
                    <input type="hidden" name="employee_id" value=<?php echo $row["id"] ?>>
                </div>
                <div class="form-group">
                    Xoa nhan vien: <?php echo $row["name"]?>
                </div>
                <input type="submit" value="Xoa" class="btn btn-danger">
                <a class="btn btn-success" href="index4.php">Trang chu</a>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Xóa nhân viên</h1>
            <form name="delete" action="" method="post">

                <input type="hidden" name="employee_id" value="<?php echo $row["id"] ?>">

                <div class="form-group">
                    <label>Tên nhân viên: <?php echo $row["name"] ?></label>
                </div>
                <button type="submit" class="btn btn-danger">xóa nhân viên</button>
            </form>

        </div>
    </div>
</div>
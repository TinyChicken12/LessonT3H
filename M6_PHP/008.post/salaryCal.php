<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
function tinhLuong($ngayCong, $luongThang) //Bài này sai 1 phần là gõ sai chính tả.
{
    if ($ngayCong > 0) {
        $luongThang = ($luongThang / 24) * $ngayCong;
        return $luongThang;
    }
}

$salary = "";
$wDay = "";
$netSalary = "";

if(isset($_POST["Salary"]) && isset($_POST["Working_Day"])){
    $salary = $_POST["Salary"];
    $wDay = $_POST["Working_Day"];
    if($salary > 0 && $wDay > 0) {
        $netSalary = tinhLuong($_POST["Salary"], $_POST["Working_Day"]);
    };
}
?>


<form name="demo" action="" method="post">
    <p>
        Salary: <input name="Salary" type="text">  //ở đây trong biến $_POST sẽ là 1 mảng theo key và key là giá trị của value
    </p>
    <p>
        Working Day: <input name="Working_Day" type="text">
    </p>
    <p>
        Luong thuc tinh:
        <?php
        if ($netSalary > 0) {
        echo $netSalary;
        }
        ?>
    </p>
    <p>

    </p>
    <p>
        <input type="submit" name="submit" value="Calculate">
    </p>
</form>
</body>
</html>
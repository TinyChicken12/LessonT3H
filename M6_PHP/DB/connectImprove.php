<?php
$host = "localhost";
$username = "root";
$password = "";

$connect = new mysqli($host, $username, $password);  //chỉ kết nối đến mysql
if ($connect->connect_error) {
    die("Fail to connect!");
}
echo "Connect successfully!";
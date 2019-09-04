<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "shopping";

$connect = new mysqli($host, $username, $password, $db_name);  //thêm tên database
if($connect->connect_error){
    die("Fail to connect");
}
echo "Connect successfully!";
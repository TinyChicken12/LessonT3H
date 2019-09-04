<?php
$host = "localhost";  //or bằng địa chỉ ip
$username = "root";
$password = "";
$db_name = "phplearning";

try{
    $connect = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connect successfully";
} catch (PDOException $e){
    $e->getMessage();
}

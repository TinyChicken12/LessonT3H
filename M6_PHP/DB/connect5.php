<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "test";

try{
    $connect = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connect successfully!";
} catch (PDOException $exception) {
    $exception->getMessage();
}


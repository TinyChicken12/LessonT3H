<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "shopping";

try{
    $connect = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password); //1 số cú pháp:
                                                            //new PDO("mysql:host=" . $host . "; $dbname= " . $db_name, $username, $password)
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //then set attribute
    echo "Connect successfully!";
} catch (PDOException $e){
    $e->getMessage();
}

<?php
define("HOST", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "appcrud2");

try {
    $conection = new PDO("mysql:host=". HOST . ";dbname=".DBNAME, USERNAME, PASSWORD);
    $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "success";
} catch (PDOException $exception) {
    $exception->getMessage();
}
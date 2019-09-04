<?php
$host = "localhost";
$username ="root";
$password = "";

$connect = mysqli_connect($host, $username, $password);
if(!$connect){
    die("Fail to connect");
}
echo "Connect successfully!";
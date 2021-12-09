<?php

$serverName="localhost";
$userName = "dangar";
$pwd = "123leinad";
$dbName="solver";

$conn = mysqli_connect($serverName,$userName,$pwd,$dbName);
if (!$conn){
    die("connection fail:" . mysqli_connect_error());
}


?>
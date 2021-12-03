<?php

$serverName="localhost:3307";
$userName = "root";
$pwd = "";
$dbName="solver";

$conn = mysqli_connect($serverName,$userName,$pwd,$dbName);
if (!$conn){
    die("connection fail:" . mysqli_connect_error());
}


?>
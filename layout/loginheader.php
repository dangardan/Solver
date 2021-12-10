<?php
include_once '../php/db.php'; 
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: login.php");
    exit;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.css">
    <link rel = "stylesheet" href = "../styleSheet.css">

</head>
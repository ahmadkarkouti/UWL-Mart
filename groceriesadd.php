<?php

include 'dbh.php';

$brand = $_POST['brand'];
$type = $_POST['type'];
$stock = $_POST['stock'];
$price = $_POST['price'];
$picture = $_POST['picture'];
$status = $_POST['status'];


$sql = "INSERT INTO products (name, description, price, status, picture, stock)
VALUES ('$brand', '$type', '$price', '$status', '$picture', '$stock')";
$result = mysqli_query($conn, $sql);

header("Location: employee.php");
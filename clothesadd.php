<?php

include 'dbh.php';

$brand2 = $_POST['brand2'];
$type2 = $_POST['type2'];
$stock2 = $_POST['stock2'];
$price2 = $_POST['price2'];
$picture2 = $_POST['picture2'];
$status2 = $_POST['status2'];


$sql = "INSERT INTO products2 (name, description, price, status, picture, stock)
VALUES ('$brand2', '$type2', '$price2', '$status2', '$picture2', '$stock2')";
$result = mysqli_query($conn, $sql);

header("Location: employee.php");
<?php

include 'dbh.php';

$itemid = $_POST['itemid'];
$addamount = $_POST['addamount'];
$stockamount = $_POST['stockamount'];


$sql = "UPDATE products SET stock = stock + " .$addamount . " WHERE id = " .$itemid;
$result = mysqli_query($conn, $sql);

$sql = "UPDATE products2 SET stock = stock + " .$addamount . " WHERE id = " .$itemid;
$result = mysqli_query($conn, $sql);

header("Location: employee.php");
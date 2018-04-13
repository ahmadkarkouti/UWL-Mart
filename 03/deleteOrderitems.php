<?php

include 'dbh.php';
if($_GET['id'] != ""){



$id = $_GET['id'];



$sql = "DELETE FROM order_items WHERE id='".$id."'";

$result = mysqli_query($conn, $sql);

header("Location: employee.php");

}
?>
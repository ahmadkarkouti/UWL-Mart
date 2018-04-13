<?php

include 'dbh.php';
if($_GET['id'] != ""){



$id = $_GET['id'];



$sql = "DELETE FROM orders WHERE id='".$id."'";

$result = mysqli_query($conn, $sql);

header("Location: employee.php");

}
?>
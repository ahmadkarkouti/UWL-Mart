<?php

include 'dbh.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$mnumber = $_POST['mnumber'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$pcode = $_POST['pcode'];
$country = $_POST['country'];
$eaddress = $_POST['eaddress'];
$pword = $_POST['pword'];

$sql = "SELECT * FROM registration WHERE eaddress='$eaddress'";

$result = mysqli_query($conn, $sql);


if(!$row = $result->fetch_assoc()) {
	$sql = "INSERT INTO registration (fname, lname, dob, mnumber, address1 , address2, pcode, country, eaddress, pword)
	VALUES ('$fname', '$lname', '$dob', '$mnumber', '$address1', '$address2', '$pcode', '$country', '$eaddress', '$pword')";
	$result = mysqli_query($conn, $sql);

	header("Location: login.php");
} else {
	header("Location: register.php");
    $msg = new SAMMessage('This is a simple text message');
}






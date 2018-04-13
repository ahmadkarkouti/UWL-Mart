<?php

include 'dbh.php';

$efname = $_POST['efname'];
$elname = $_POST['elname'];
$edob = $_POST['edob'];
$emnumber = $_POST['emnumber'];
$eaddresse = $_POST['eaddresse'];
$ecity = $_POST['ecity'];
$epcode = $_POST['epcode'];
$ecountry = $_POST['ecountry'];
$eeaddress = $_POST['eeaddress'];
$epword = $_POST['epword'];



$sql = "UPDATE registration SET fname = '$efname', lname = '$elname', dob = '$edob', mnumber = '$emnumber', address1 = '$eaddresse' , address2 = '$ecity', pcode = '$epcode', country = '$ecountry', eaddress = '$eeaddress', pword = 'epword' WHERE mnumber = '$emnumber'";
$result = mysqli_query($conn, $sql);



header("Location: account.php");


?>
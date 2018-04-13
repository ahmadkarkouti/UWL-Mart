<?php

include 'dbh.php';
$picture = $_POST['picture'];
$someone = $_POST['someone'];


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

$sql = "UPDATE registration SET picture = '$picture', fname = '$efname', lname = '$elname', dob = '$edob', mnumber = '$emnumber', address1 = '$eaddresse' , address2 = '$ecity', pcode = '$epcode', country = '$ecountry', eaddress = '$eeaddress', pword = '$epword' WHERE fname = '$someone'";

$result = mysqli_query($conn, $sql);

header("Location: account.php");
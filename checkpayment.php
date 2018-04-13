<?php
include 'dbh.php';
include 'cartAction.php';


$ccn = $_POST['ccn'];
$expiry = $_POST['expiry'];
$cvv = $_POST['cvv'];


    


$sql = "SELECT * FROM uwlcredit WHERE ccn='$ccn' AND expiry='$expiry' AND cvv='$cvv' AND credit >'$cart->total()'";

$result = mysqli_query($conn, $sql);




if($row = $result->fetch_assoc()) {
	$checkcredit = $db->query("UPDATE uwlcredit SET credit = credit - '$total' WHERE ccn='$ccn'");
	header("Location: cartAction.php?action=placeOrder");
} else {

	header("Location: declined.php");
	
    
}


   


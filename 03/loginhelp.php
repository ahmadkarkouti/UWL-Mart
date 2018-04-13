<?php
session_start(); 
include 'dbh.php';

$eaddress = $_POST['eaddress'];
$pword = $_POST['pword'];


if($eaddress == 'employee' AND $pword == "uwlmart") {
    header("Location: employee.php");
}   else{
    


$sql = "SELECT * FROM registration WHERE eaddress='$eaddress' AND pword='$pword'";

$result = mysqli_query($conn, $sql);




if(!$row = $result->fetch_assoc()) {
        echo "<script>
        alert('Your username or password is incorrect!');
        window.location.href='login.php';
            </script>";
} else {
	$_SESSION['id'] = $row['id'];
    $_SESSION['fname'] = $row['fname'];
    $_SESSION['lname'] = $row['lname'];
    $_SESSION['dob'] = $row['dob'];
    $_SESSION['address1'] = $row['address1'];
    $_SESSION['address2'] = $row['address2'];
    $_SESSION['country'] = $row['country'];
    $_SESSION['pcode'] = $row['pcode'];
    $_SESSION['eaddress'] = $row['eaddress'];
    $_SESSION['mnumber'] = $row['mnumber'];
    header("Location: account.php");
    
}

}


   


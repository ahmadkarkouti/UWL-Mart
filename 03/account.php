<?php
session_start(); 
?>

<!DOCTYPE html>

<!-- Basic web page -->
<html lang ="en">
    
    
    <!--        HEAD        -->
    <head>

        <meta charset="UTF-8"> <!-- Character set -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="UwlMart">
        <meta name="keywords" content="online, store, shopping, uwl, website">
        <meta name="developers" content="Franck, Ahmad, Mel">
        <!-- This enables the website to be reponsive and therefore auto-rescale -->
        
        <!-- Linking the internal style sheet -->
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link rel="stylesheet" type="text/css" href="advancedcss.css">
        
        <!-- Linking the external  style sheet -->
        <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="icon" type="images/png" href="images/logo copy.png" sizes="32x32">
        <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="ism/css/my-slider.css"/>
        <script src="ism/js/ism-2.2.min.js"></script>
         <title> UWLMart | Account </title>
        <script src="script.js"></script>
        <script type="text/javascript" src="java.js"></script>
        <link rel="stylesheet" href="design.css">
    </head>


<?php  
 
$result = '';
$hide1 = '';
$hide2 = '';
$account = '';
$details = '';
$hide3 = '';
$hide4 = '';
 
if(isset($_SESSION['fname']))  
{  
$result = 'Hello, ' .  $_SESSION['fname'];
$account  = 'account.php';
$details = $_SESSION['fname']. '</br>'. $_SESSION['lname']. '</br>'. $_SESSION['dob']. '</br>'. $_SESSION['address1']. '</br>'. $_SESSION['address2']. '</br>'. $_SESSION['pcode']. '</br>'. $_SESSION['country']. '</br>'. $_SESSION['eaddress'];


}  else{
    $result = 'Login';
    $hide1 = '<!-- ';
    $hide2 = ' -->';
    $account = 'login.php';
}

if($_SESSION['eaddress'] !== "ahmad_karkouty@hotmail.com"){
    $hide3 = '<!-- ';
    $hide4 = ' -->';
	if($_SESSION['eaddress'] !== "narula.dhruva@icloud.com"){
    $hide3 = '<!-- ';
    $hide4 = ' -->';
	if($_SESSION['eaddress'] !== "21306570@student.uwl.ac.uk"){
    $hide3 = '<!-- ';
    $hide4 = ' -->';
} else{
    $hide3 = '';
    $hide4 = '';
}
	}
}
 
 
?>

  
<body>    
    <div class="topNav">
        <div class="w3-xlarge ">
        <form action="logout.php">
            <ul>
                <li><a href="viewCart.php" class="fa fa-shopping-basket"> Basket </a></li>               
                <li><a href="<?php echo $account; ?>" id="loginitem" id="loginitem" class="fa fa-user-circle-o"><?php echo $result; ?> </a></li>
                <?php echo $hide1; ?> <button type="submit" style="background-color:Transparent;background-repeat:no-repeat;border: none;cursor:pointer;display: inline-flex; align-items: flex-start;";><a>Logout</a></button><?php echo $hide2; ?>
            </ul>
        </form>
        </div>            
    </div>
    
    <header>
        
        <div class="container">
            <div id="brand">
                <p><a href="index.php" ><img src="images/logo.png" alt="UwlMart logo" style="width:250px;height:100px;"></a></p>
            </div>
            <hr /> 
            <ul> 
                <li><a href="index.php" class="fa fa-home"> Home </a></li> 
                <li><a href="groceries.php" class="fa fa-cart-arrow-down"> Groceries </a></li> 
                <li><a href="clothing.php" class="fa fa-tags"> Clothing </a></li>
                <li class="current"><a href="<?php echo $account; ?>" class="fa fa-male"> Your account </a></li>
            </ul>
            
            
        </br>
        </br>
        </br>
        
        <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: auto;
}
</style>
</head>
<body>

<p>Your account:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Details</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Orders</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Payment details</button>
</div>

<div id="London" class="tabcontent">
  <h3>Your Details</h3>
          <?php echo $details; ?>
        <?php echo $hide3; ?><form method="get" action="employee.php"> <button type="submit">Employees Page</button></form><?php echo $hide4; ?>
</div>

<div id="Paris" class="tabcontent">
        <table>
            <tr>
			<th>Order id</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Date of Purchase</th>
            </tr>
            
         <?php
         $_SESSION['sessCustomerID'] = $_SESSION['id'];
        include 'dbh.php';
        $sql = "SELECT order_items.order_id, productnames.description, order_items.quantity, orders.total_price, orders.created
FROM order_items, orders, productnames
WHERE order_items.order_id = orders.id AND productnames.id = order_items.product_id AND orders.customer_id =" .$_SESSION['sessCustomerID'] ."
ORDER BY created";

        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr> <td>". $row['order_id']. "</td> <td>" . $row['description']. "</td> <td>"
                . $row["quantity"]. "</td> <td>" . $row["total_price"] ."</td> <td>"
                . $row["created"]. "</td> </tr>";
            }
        } else {
            echo "You have no orders";
            }
        
        
        ?>
            
        </table>
        </br>
        </br>
</div>

<div id="Tokyo" class="tabcontent">
        <table>
            <tr>
			<th>Credit Card Number</th>
            <th>Expiry Date</th>
            <th>Cvv</th>
            <th>Credit</th>
            </tr>
            
         <?php
        $sql = "SELECT * FROM uwlcredit";

        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr> <td>". $row['ccn']. "</td> <td>" . $row['expiry']. "</td> <td>"
                . $row["cvv"]. "</td> <td>£" . $row["credit"] ."</td> </tr>";
            }
        } else {
            echo "You have no cards";
            }
        
        
        ?>
            
        </table>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 


</br>
</br>
</body>
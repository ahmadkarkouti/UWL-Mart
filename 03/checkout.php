<?php

session_start(); 



// include database configuration file
include 'dbh.php';

// initializ shopping cart class
include 'cart.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: groceries.php");
}

$_SESSION['sessCustomerID'] == $_SESSION['id'];
$_SESSION['sessCustomerID'] = $_SESSION['id'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
     <title> UWLMart | Checkout </title>
    <script src="script.js"></script>
    <script type="text/javascript" src="java.js"></script>
    <link rel="stylesheet" href="design.css">
    <style>
    .table{width: 65%;float: left;}
    .shipAddr{width: 30%;float: left;margin-left: 30px;}
    .footBtn{width: 95%;float: left;}
    .orderBtn {float: right;}
    </style>
</head>

<?php  
 
$result = '';
$hide1 = '';
$hide2 = '';
$account = '';
 
if(isset($_SESSION['fname']))  
{  
$result = 'Hello, ' .  $_SESSION['fname'];
$account  = 'account.php';

}  else{
    $result = 'Login';
    $hide1 = '<!-- ';
    $hide2 = ' -->';
    $account = 'login.php';
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
                <li class="current"><a href="groceries.php" class="fa fa-cart-arrow-down"> Groceries </a></li> 
                <li><a href="clothing.php" class="fa fa-tags"> Clothing </a></li>
                <li><a href="<?php echo $account; ?>" class="fa fa-male"> Your account </a></li>
            </ul> 
<div class="container">
    <h1>Order Preview</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '£'.$item["price"]; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo '£'.$item["subtotal"]; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No items in your cart......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo '£'.$cart->total(); ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    <div class="shipAddr">
        <h4>Shipping Details</h4>
        <p><?php echo $_SESSION['fname']; ?></p>
        <p><?php echo $_SESSION['eaddress']; ?></p>
        <p><?php echo $_SESSION['mnumber']; ?></p>
        <p><?php echo $_SESSION['address1']; ?></p>
        <p><?php echo $_SESSION['pcode']; ?></p>
        <p><?php echo $_SESSION['country']; ?></p>
    </div>
    <div class="footBtn">
        <a href="groceries.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a>
		</br>
	</br>
		<div class="w3-diplay-right">
		<form action="checkpayment.php" method="POST">
			        <h4>Payment Details</h4>
			<label>Credit Card Number</label>
			<input type="text" class="w3-input" name="ccn">
			                        <br />
                <label>Expiry Date</label>
			<input type="text" class="w3-input" name="expiry">
			                        <br />
                <label>Cvv</label>
			<input type="text" class="w3-input" name="cvv">
			<button type="submit">Place Order</button>
		</form>
		</div>
    </div>
</div>
</body>
</html>
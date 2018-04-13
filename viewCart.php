<?php
// initializ shopping cart class
include 'cart.php';
$cart = new Cart;
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
    <link rel="stylesheet" type="text/css" href="mobileStyle.css">
    
    <!-- Linking the external  style sheet -->
    <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="icon" type="images/png" href="images/logo copy.png" sizes="32x32">
    <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="ism/css/my-slider.css"/>
    <script src="ism/js/ism-2.2.min.js"></script>
     <title> UWLMart | Groceries </title>
    <script src="script.js"></script>
    <script type="text/javascript" src="java.js"></script>
    <!-- <link rel="stylesheet" href="design.css"> -->
    <link rel="stylesheet" href="accountCss.css">
    <style>
    input[type="number"]{width: 30%;}
    </style>
    <script>
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
    </script>
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




    
    <div class="topNav">
        <div class="w3-xlarge ">
        <form action="logout.php">
            <ul>
                <li><a href="viewCart.php" class="fa fa-shopping-basket"> Basket </a></li>               
                <li><a href="<?php echo $account; ?>" id="loginitem" id="loginitem" class="fa fa-user-circle-o"><?php echo $result; ?> </a></li>
                <?php echo $hide1; ?> <button type="submit" style="background-color:Transparent;background-repeat:no-repeat;border: none;cursor:pointer;display: inline-flex; align-items: flex-start;";><a id="desktopOnly">Logout</a></button><?php echo $hide2; ?>
            </ul>
        </form>
        </div>            
    </div>
    
    <header>
        
                        <div class="container4">
                            <div id="brand" style="margin-bottom: -10px;">
                                <p>
                                    <a href="index.php"><img src="images/logo.png" alt="UwlMart logo" style="width:250px;height:100px;"></a>
                                </p>
                            </div>
                            <hr />
                            <div id="myNav" class="overlay2">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <div class="containerBar overlay-content" style="margin-top: -50px;">
                                    <ul>
                                        <li><a href="index.php" class="fa fa-home"> Home </a></li>
                                        <li><a href="groceries.php" class="fa fa-cart-arrow-down"> Groceries </a></li>
                                        <li><a href="clothing.php" class="fa fa-tags"> Clothing </a></li>
                                        <li><a href="<?php echo $account; ?>" class="fa fa-male"> Your account </a></li>
                                        <li class="current"><a href="viewCart.php" class="fa fa-shopping-basket" id="bask1"> Basket </a></li>
                                        <li>
                                            <a href="<?php echo $account; ?>" class="fa fa-user-circle-o" id="loginitem1">
                                                <?php echo $result; ?>
                                            </a>
                                        </li>
                                    </ul>
                                    <br>
                                    <br>
                                    <p>
                                        <form action="logout.php">
                                            <?php echo $hide1; ?>
                                                <button type="submit" id="logoutItem1"><a>Logout</a></button>
                                                <?php echo $hide2; ?>
                                        </form>

                                    </p>
                                </div>
                            </div>
                        </div>
                                                    <span style="font-size:30px;cursor:pointer;" class="openbtn fa fa-bars" onclick="openNav()" id="navbar"></span>


        </header>
        <br>
<link rel="stylesheet" type="text/css" href="mobileStyle.css">
<body style="background-image: url(images/1.jpg);">    
<div class="container" id="baskCont">
    <h1 style="color: white; text-align: center;">Basket</h1>
    <hr>
    <table class="table">
    <thead>
        <tr>
            <th>Product</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th style="display: none;"> Empty basket</th>
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
            <td><?php echo $item["description"]; ?></td>
            <td><?php echo '£'.$item["price"]; ?></td>
            <td><input type="number" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
            <td><?php echo '£'.$item["subtotal"]; ?></td>
            <td>
                <a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="fa fa-shopping-basket" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>Your basket is empty</p></td>
        <?php } ?>
    </tbody>
    </table>
    <!-- <tfoot> -->
        <!-- <tr> -->
                                    <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
            <i id="total" class="text-center">Total:  <?php echo '£'.$cart->total(); ?> <small>VAT included.</small></i>
            <?php } ?>
            <div>
                <input type="text" name="discount">
                <button>Add Discount</button>
            </div>
            <div>
            <a href="groceries.php" class="fa fa-chevron-circle-left" id="ordButton" >  Continue Shopping</a>
            <a href="payme.html" class="fa fa-cc-visa" id="ordButton" > Checkout </a>
            </div>


        <!-- </tr> -->
    <!-- </tfoot> -->
 <!--    </table> -->
</div>
</body>
</html>
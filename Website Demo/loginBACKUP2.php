<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
    
<head>
    
    <meta charset="UTF-8"> <!-- Character set -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="UwlMart">
    <meta name="keywords" content="online, store, shopping, uwl, website">
    <meta name="developers" content="Franck, Ahmad, Mel">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" type="text/css" href="advancedcss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="images/png" href="images/logo copy.png" sizes="32x32">
    <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">    
    <script type="text/javascript" src="java.js"  charset="utf-8"></script>
    <link rel="stylesheet" href="design.css">
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LoginPage</title>

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
header("Location: account.php");

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
                <li><a href="basket.php" class="fa fa-shopping-basket"> Basket </a></li>               
                <li><a href="<?php echo $account; ?>" id="loginitem" id="loginitem" class="fa fa-user-circle-o"><?php echo $result; ?> </a></li>
                <?php echo $hide1; ?> <button type="submit" style="background-color:Transparent;background-repeat:no-repeat;border: none;cursor:pointer;display: inline-flex; align-items: flex-start;";><a>Logout</a></button><?php echo $hide2; ?>
            </ul>
        </form>
        </div>            
    </div>
    
    <header>
        
        <div class="container">
            <div id="brand">
                <p><img src="images/logo.png" alt="UwlMart logo" style="width:250px;height:100px;"></p>
            </div>
            <hr /> 
            <ul> 
                <li><a href="index.php" class="fa fa-home"> Home </a></li> 
                <li><a href="groceries.php" class="fa fa-cart-arrow-down"> Groceries </a></li> 
                <li><a href="clothing.php" class="fa fa-tags"> Clothing </a></li>
                <li><a href="<?php echo $account; ?>" class="fa fa-male"> Your account </a></li>
            </ul>
        </div>   


    
    
     <style type="text/css">
    /*-----------Background colour and Text------------*/
    a { text-decoration: none; }
    h1 { font-size: 2em;margin: 10px 450px; display:inline; }
    
    
    p {
    margin-bottom: 20px;
    
    font: sans-serif;
    text-decoration: underline;
    }
    strong {
    font-weight: bold;margin: 10px 0px;display:inline;
    }
    .uppercase { text-transform: uppercase; }
    
    /* ---------- LOGIN ---------- */
    #login {
    margin: 20px auto;
    width: 600px;
    border-width: thick;
    
    }
    /*--------Email and Password box------*/
    form fieldset input[type="text"], input[type="password"] {
    border: 2px ridge;
    border-radius: 3px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-color: LightGray  ;
    /*---------Email and Password Font------*/
    color: black;
    font-family: 'Open Sans', Arial, Helvetica, sans-serif;
    font-size: 15px;
    height: 60px;    /*--Box Size---/*
    outline: none;
    /*---------Text Alignment---------*/
    padding: 0px 20px;
    width: 500px;
    -webkit-appearance:none;
    }
    
    /*----------Login Button----------------*/
    form fieldset input[type="submit"] {
    background-color: #8FBC8F;
    border-width: 4px;
    border-color: SlateGrey   ;
    height: 65px;
    border-radius: 6px;
    
    color: black ;
    cursor: pointer;
    font:serif;
    font-size: 0.90em;
    font-weight: thick;
    text-transform: uppercase;
    width: 500px;
    -webkit-appearance:none;
    }
    /*-------Forgot Password && Register Tab---------*/
    form fieldset a {
    color: #5a5656;
    font-size: 13px;
    
    }
    
    form fieldset a:hover { text-decoration: underline; }
    .btn-round {
    background-color: #5a5656;
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    color: #f4f4f4;
    display: block;
    font-size: 12px;
    height: 50px;
    line-height: 50px;
    margin: 50px 135px;
    text-align:centre;
    text-transform: uppercase;
    width: 50px;
    }
    </style>    
<div id="login">

</br>
</br>
</br>
</br>
<form  action="loginhelp.php" method="POST">
<fieldset>
<p><input type="text" required value="Email address" name="eaddress"></p>
<p><input type="password" required value="Password" name="pword"></p>
<p><a href="#">Forgot Password?</a></p>
<p><a href ="register.php">Not a member? Register here.</a></p>
<p><input type="submit" value="Login"></p>
</fieldset>
</form>

<p>

</div> <!-- end login -->
</body>
</html>
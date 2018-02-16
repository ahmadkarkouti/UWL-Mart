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

</br>
</br>
</br>              
</br>
</br>

</body>
    

                <form class="w3-container" action="loginhelp.php" method="POST">
                    <div class="w3-container w3-blue"><h2>Login</h2></div>
                                            </br>
                    <label>Email:</label>
                    <input type="text" class="w3-input"  name="eaddress"/>
                                            <br />
                    <label>Password:</label>
                    <input type="password" class="w3-input" name="pword"/>
                                            <br />
                                            <br />
                    <button type="submit" >Log in</button>
                    <p><b><a href="register.php">Not a member? Register here</a></b></p>
                </form>
            
                
       
    <!--form action="login.php" method="POST">
        <input type="text" class="w3-input" name="eaddress" />
        <input type="password" class="w3-input" name="pword" />
        <button type="submit" >Log in</button>
    </form-->

<style>
a:link {
    text-decoration: none;
}

a:visited {
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

a:active {
    text-decoration: underline;
}
</style>





</html>
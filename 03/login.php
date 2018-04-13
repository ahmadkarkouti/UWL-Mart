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
         <title> UWLMart | Login </title>
        <script src="script.js"></script>
    </head>

    
    
    <!--        BODY        -->
    <body 
        style="
        background:url(images/food5.jpg);
        background-size: 1200px 1000px;
        
        
        ">
            <div class="topNav">
                 <div class="w3-xlarge ">
     
                <ul>
                    <li><a href="viewCart.php" class="fa fa-shopping-basket"> Basket </a></li>               
                    <li><a href="login.php" class="fa fa-user-circle-o"> Login </a></li> 
                </ul>
                 </div>
                
            </div>
        <!--<hr />v-->
        <header>
            <div class="container">
                <!-- 
                    In general, an id has a unique tag while a class is used multiple 
                       times in the showcase(page)
                -->
                <div id="brand">
                <p><a href="index.php" ><img src="images/logo.png" alt="UwlMart logo" style="width:250px;height:100px;"></a></p>
                </div>
                <hr /> 
                  <!--  <form>
                        <input  type="text" name="search">
                        <input  type="submit" class="button" value="Search"><br>
                    </form> -->
                
                
                
                    <!-- GROUPING CONTENT -->
                    
                        <ul> 
                            <!-- 
                            In HTML, a menu tab is most commonly made using a
                            set of unordered lists
                            -->
                            <li><a href="index.php" class="fa fa-home"> Home </a></li> 
                            <li><a href="groceries.php" class="fa fa-cart-arrow-down"> Groceries </a></li> 
                            <li><a href="clothing.php" class="fa fa-tags"> Clothing </a></li>
                            <li><a href="account.php" class="fa fa-male"> Your account </a></li>
                            
                        </ul>
                     
                    <!-- end of grouping -->
                    <!--<form>
                        <input  type="text" name="search">
                        <input  type="submit" class="button" value="Search"><br>

                    </form> -->
            </div>
            <hr />
        </header>  
         
        <!-- login -->
	<div class="login">

                        
                        <div class="loginBox">
                            <img src="images/avatar2.png">
                            <h4><em>Welcome to UWLMart</em></h4> 
                            <h6><em>Please enter your email address and your password</em></h6>
                            <hr />

                            <form action="loginhelp.php" method="POST">
                                <input type="text" name="eaddress" placeholder="Email Address">
                                <input type="password" name="pword" placeholder="Password">
                             
                                <div class="forgot">
                                    <a href="#">Forgot Password?</a>
                                </div>
                                <input type="submit" value="Login">
                           </form>
                                <h6>Not registered yet?</h6>
                                <form action="register.php">
                                <input type="submit" value="Register Here" class="registerHere">
                                </form>

                        
                        </div>
	</div>
<!-- //login -->
           
    </body>    
</html>

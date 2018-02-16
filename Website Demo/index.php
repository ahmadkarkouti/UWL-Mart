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
    
        
            <!--     CASCADING  STYLE   SHEET   -->    
<!-- -------------------------------------------------------------------------------------------------------------------- -->            
        <!-- Linking the internal style sheet -->
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link rel="stylesheet" type="text/css" href="advancedcss.css">
        
        <!-- Linking the external  style sheet -->
        <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="icon" type="images/png" href="images/logo copy.png" sizes="32x32">
        <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="ism/css/my-slider.css"/>
        
        
            <!--     JAVASCRIPT  -->    
<!-- -------------------------------------------------------------------------------------------------------------------- -->            
<script type="text/javascript" src="script.js"></script>
        <script src="ism/js/ism-2.2.min.js"></script>
         <title> UWLMart | Home</title>
        <script src="script.js"></script>

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
                <li><a href="cart.php" class="fa fa-shopping-basket"> Basket </a></li>               
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
                <li class="current"><a href="index.php" class="fa fa-home"> Home </a></li> 
                <li><a href="groceries.php" class="fa fa-cart-arrow-down"> Groceries </a></li> 
                <li><a href="clothing.php" class="fa fa-tags"> Clothing </a></li>
                <li><a href="<?php echo $account; ?>" class="fa fa-male"> Your account </a></li>
            </ul>
        </div>   

</br>
</br>



  
        <section id="showcase"> <!-- the only showcase section -->
            <div class="container">
                <!--
                We add the container in order to contain all the data in a
                fixed position relative to the margins
                -->
                <!--<h1 align="center"><em>redefine <tt>expectations..</tt></em></h1> 
                -->
            </div>
        </section>
        <hr />
        
        <!--       NEWS        -->
        
        <section id="news">
            
           <h1>Looking for something new?</h1> 
            
           <!-- <img src="images/shoot.png" alt="girl"> -->
            
            <div class="container3"> 
                <div class="containerOverlay">
                    <img  src="images/vegan.jpg" alt="vegan" class="imageOverlay">
                    <div class="overlay">
                        <div class="textSlide">
                            Turning vegan? We've got your back
                        </div>
                    </div>
                </div>
                
                <div class="containerOverlay"> 
                    <img src="images/peppers.jpg" alt="peppers" class="imageOverlay">
                    <div class="overlay">
                        <div class="textSlide">
                            Check out our different pepper based recipes
                        </div>
                    </div>
                </div>
                
                
                <div class="containerOverlay"> 
                    <img src="images/cake2.jpg" alt="desserts" class="imageOverlay">
                    <div class="overlay">
                        <div class="textSlide">
                            k,
                        </div>
                    </div>
                </div>
                
                <div class="containerOverlay">
                    <img src="images/home.jpg" alt="vegan" class="imageOverlay" >
                    <div class="overlay">
                        <div class="textSlide">
                            Turning vegan? We've got your back
                        </div>
                    </div>
                </div>

                
                
            </div> 
        </section>
        
        
        <hr />
        
        <!--        SLIDERS     -->
        <div class="containerSlide">
        <div class="ism-slider" data-play_type="loop" data-image_fx="zoompan" id="my-slider" style="border: #ffffff -5px solid; ">
        <ol>
          <li>
            <img src="ism/image/slides/_u/1517685630041_328746.png">
            <div class="ism-caption ism-caption-0">Register your UWL student ID and <br>get 10% off every time you spend<br> £20 or more </div>
          </li>
          <li>
            <img src="ism/image/slides/_u/1517686589721_768427.png">
            <div class="ism-caption ism-caption-0" data-delay='200'>Join the UWLSU ARMY and get a free hoodie</div>
          </li>
          <li>
            <img src="ism/image/slides/_u/1517687993343_421952.jpg">
            <div class="ism-caption ism-caption-0">Checkout our various selection of wine</div>
          </li>
        </ol>
        </div>
        </div>   
        
        <hr />
   

<!--        DEALS   SECTIONS        -->

        <section id="Deals">
            <div class="container"> 
                <h1>This week's selections</h1>
                
                    <img src="images/food.jpg" class="deal" alt="food">
                <div class="deal">
                    <h3>Food</h3>
                    <p> Get the best cooked food deals </p><br>
                </div>
                
                
                    <img src="images/grocery.jpg" class="deal" alt="deal">
                <div class="deal">
                    <h3>Groceries</h3>
                    <p> Get the best grocery deals </p>
                </div>
                
                
                    <img src="images/clothes.jpg" class="deal" alt="clothes">
                <div class="deal">
                    <h3>Clothing</h3>
                    <p> Get the best clothing deals </p>
                </div>
                
            </div>


        </section>
 
        <footer>
            <div class="row">
  <div class="column">
    <div class="card">
      <img src="img1.jpg" alt="Mel" style="width:100%">
      <div class="container">
        <h2>Mel</h2>
        <p class="title"> Project manager </p>
        <p>bla bla bla bla bla.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img2.jpg" alt="Franck" style="width:100%">
      <div class="container">
        <h2>Franck Ndame</h2>
        <p class="title">Developer &amp; Databases</p>
        <p>bla bla bla bla bla.</p>
        <p>example@example.com</p>
        <p><button class="button" onclick="contactUs()">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img3.jpg" alt="Ahmad" style="width:100%">
      <div class="container">
        <h2> Ahmad </h2>
        <p class="title">Developer &amp; Databases</p>
        <p>bla bla bla bla bla.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
            <p>Diet brain, Copyright &copy; 2018 </p>
        </footer>

    </body>
    
</html>

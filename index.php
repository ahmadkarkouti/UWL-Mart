<?php
   session_start(); 
   ?>
    <!DOCTYPE html>
    <!-- Basic web page -->
    <html lang="en">
    <!--        HEAD        -->

    <head>
        <meta charset="UTF-8">
        <!-- Character set -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="UwlMart">
        <meta name="keywords" content="online, store, shopping, uwl, website">
        <meta name="developers" content="Franck, Ahmad, Mel">
        <!-- This enables the website to be reponsive and therefore auto-rescale -->
        <!--     CASCADING  STYLE   SHEET   -->
        <!-- Linking the internal style sheet -->
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link rel="stylesheet" type="text/css" href="advancedcss.css">
        <link rel="stylesheet" type="text/css" href="mobileStyle.css">
        <!-- Linking the external  style sheet -->
        <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" type="images/png" href="images/logo copy.png" sizes="32x32">
        <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="ism/css/my-slider.css" />
        <!--     JAVASCRIPT  -->
        <script type="text/javascript" src="script.js"></script>
        <script src="ism/js/ism-2.2.min.js"></script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <title> UWLMart | Home</title>
        <script src="script.js"></script>
        <?php  
         $result = '';
         $hide1 = '';
         $hide2 = '';
         $account = '';

         if(isset($_SESSION['fname']))  
         {  
         $result = ' '.$_SESSION['fname'];
         $account  = 'account.php';

         }  else{
             $result = 'Login';
             $hide1 = '<!-- ';
             $hide2 = ' -->';
             $account = 'login.php';
         }

         ?>

            <body>
                <div id="main">
                    <div class="topNav">
                        <div class="w3-xlarge ">
                            <form action="logout.php">
                                <ul>
                                    <li><a href="viewCart.php" class="fa fa-shopping-basket"> Basket </a></li>
                                    <!-- href="<?php echo $account; ?>" -->
                                    <li>
                                        <a id="loginitem" class="fa fa-user-circle-o">
                                            <?php echo $result; ?>
                                        </a>
                                    </li>
                                    <?php echo $hide1; ?>
                                        <button type="submit" style="background-color:orange;background-repeat:no-repeat; border: none; border-radius: 10px; cursor:pointer;display: inline-flex; align-items: flex-start; color: white; float: left;"><a id="desktopOnly" >Logout</a></button>
                                        <?php echo $hide2; ?>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <header>
  
                        <div class="container4">
                            <div id="brand" style="margin-bottom: -10px;">
                                <p>
                                    <i href="index.php"><img src="images/logo.png" alt="UwlMart logo" style="width:250px;height:100px;"></i>
                                </p>
                            </div>
                            <hr>

                            
                            
                            <div id="myNav" class="overlay2">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <div class="containerBar overlay-content" style="margin-top: -50px;">
                                    <ul>
                                        <li class="current"><a href="index.php" class="fa fa-home"> Home </a></li>
                                        <li><a href="groceries.php" class="fa fa-cart-arrow-down"> Groceries </a></li>
                                        <li><a href="clothing.php" class="fa fa-tags"> Clothing </a></li>
                                        <li><a href="<?php echo $account; ?>" class="fa fa-male "> Your account </a></li>
                                        <li><a href="viewCart.php" class="fa fa-shopping-basket " id="bask1"> Basket </a></li>

                                        <li>
                                            <a href="<?php echo $account; ?>" class="fa fa-user-circle-o w3-card-4" id="loginitem1">
                                                <?php echo $result; ?>
                                            </a>
                                        </li>

                                        <li>
                                    <!--         <a href="logout.php" class="fa fa-user-circle-o" id="loginitem1"> -->
                                            <?php echo $hide1; ?>
                                                <a href="logout.php" id="logoutItem1" class="fa fa-user-circle-o w3-card-4">Logout</a>
                                                <?php echo $hide2; ?>        
                                            </a>
                                        </li>
                                    </ul>
                                    <br>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                                                    <span style="font-size:30px;cursor:pointer;" class="openbtn fa fa-bars" onclick="openNav()" id="navbar"></span>

                    </header>

                    <div id="loginModal" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span style="background-color: #e8491d; color: white; border-radius: opx; padding: 5px 5px 5px 5px; font-size: 25px;" class="close">x</span>
                            <!-- <span class="close">&times;</span> -->
                            <div class="login">
                                <div class="loginBox">
                                    <img src="images/avatar2.png">

                                    <h4>Welcome to UWLMart</h4>
                                    <h6>Please enter your email address and your password</h6>
                                    <br>

                                    <form action="loginhelp.php" method="POST" name="form">
                                        <input type="text" name="eaddress" placeholder="Email Address">
                                        <input type="password" name="pword" placeholder="Password">
                                        <div class="forgot">
                                            <a href="#" style="text-align: center;">Forgot Password?</a>

                                        </div>
                                        <input type="submit" value="Login" class="w3-card-4" onclick="lettersOnly(document.form.text)">
                                    </form>

                                    <h6>Not registered yet?</h6>
                                    <form action="register.php">
                                        <input type="submit" value="Register Here" class="registerHere">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        // Get the modal
                        var modal = document.getElementById('loginModal');

                        // Get the button that opens the modal
                        var btn = document.getElementById("loginitem");

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close")[0];

                        // When the user clicks the button, open the modal 
                        btn.onclick = function() {
                            modal.style.display = "block";
                        }

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function() {
                            modal.style.display = "none";
                        }

                        // When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }
                        }
                    </script>
                    <section id="showcase">
                        <!-- the only showcase section -->
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
                                <img src="images/vegan.jpg" alt="vegan" class="imageOverlay">
                                <div class="overlay">
                                    <div class="textSlide">
                                        <a href="vegetables.php" style="text-decoration: none;">Turning vegan? We've got your back</a>
                                    </div>
                                </div>
                            </div>
                            <div class="containerOverlay">
                                <img src="images/peppers.jpg" alt="peppers" class="imageOverlay">
                                <div class="overlay">
                                    <div class="textSlide">
                                       <a href="vegetables.php" style="text-decoration: none;"> Check out our different pepper based recipes</a>
                                    </div>
                                </div>
                            </div>
                            <div class="containerOverlay">
                                <img src="images/cake2.jpg" alt="desserts" class="imageOverlay">
                                <div class="overlay">
                                    <div class="textSlide">
                                        <a href="dairy.php" style="text-decoration: none;">Click here for daily dairies</a>
                                    </div>
                                </div>
                            </div>
                            <div class="containerOverlay">
                                <img src="images/home.jpg" alt="vegan" class="imageOverlay">
                                <div class="overlay">
                                    <div class="textSlide">
                                        <a href="clothing.php" style="text-decoration: none;">Checkout our household equipments</a>
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
                                    <div class="ism-caption ism-caption-0">Register your UWL student ID and
                                        <br>get 10% off every time you spend
                                        <br> £20 or more </div>
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
                                <h3 style="background-color: green; border-radius: 15px;" class="w3-card-4">Food</h3>
                                <p style="font-family: serif;"> 
Cook the noodles in a large pan of boiling water for 3-5 mins, then drain and put them in cold water. Drain thoroughly, toss them with 1 tbsp of the sesame oil and set aside.

Combine the chicken with all the marinade ingredients and ½ tsp salt, mix well and then leave to marinate for about 10 mins.

Heat a wok over a high heat. Add 1 tbsp of the groundnut oil and, when it is very hot and slightly smoking, add the chicken shreds. Stir-fry for about 2 mins and then transfer to a plate. Wipe the wok clean. Reheat the wok until it is very hot, then add the remaining groundnut oil. When the oil is slightly smoking, add the garlic and stir-fry for 10 secs. Then add the mangetout and ham, and stir-fry for about 1 min.

Add the noodles, soy sauces, rice wine or Sherry, pepper, sugar, spring onions and 1 tsp salt. Stir-fry for 2 mins. Return the chicken and any juices to the noodle mixture. Stir-fry for about 3-4 mins or until the chicken is cooked. Add 1 tsp sesame oil and give the mixture a few final stirs. Put on a warm platter and serve immediately.</p>
                                <br>
                            </div>
                            <img src="images/grocery.jpg"  class="deal" alt="deal">
                            <div class="deal">
                                <h3 style="background-color: green; border-radius: 15px;" class="w3-card-4">Groceries</h3>
                                <p style="font-family: serif;"> Get the best grocery deals through our wide variations </p>
                            </div>
                            <p><img src="images/clothes.jpg" style="width: 70%; border-radius: 40px; float: right;" class="deal" alt="clothes"></p>
                            <br><br>
                            <div class="deal">
                                <h3 style="background-color: green; border-radius: 15px;" class="w3-card-4">Clothing</h3>
                                <p style="font-style: italic; font-family: serif; font-size: 100%;"> The corset, an article of clothing that shapes the waist (and sometimes the hips) and supports the bust, still enjoys moderate popularity in modern times, especially in weddingwear and alternative fashion. Corsetlike garments can be traced all the way back to Minoan civilization in the Bronze Age, but corsets as we know them didn’t come into fashion until about the 15th century. They have since gone through many iterations. Although you may already see corsets at special occasions, they could still be useful in everyday life. Skip the diet pills and just have someone lace you up really tight. </p>
                            </div>
                        </div>
                    </section>
                    <footer>
                        <div class="row">
                            <div class="column">
                                <div class="card w3-card-4" style="border-radius: 10px;">
                                    <img src="images/tomato.jpg" alt="Mel" style="width:30%">
                                    <div class="container">
                                        <h2>Mel</h2>
                                        <p class="title"> Project manager </p>
                                        <p>example@example.com</p>
                                        <p>
                                            <button class="button">Contact</button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card w3-card-4" style="border-radius: 10px;">
                                    <img src="images/ahmad.jpg" alt="Ahmad" style="width:30%">
                                    <div class="container">
                                        <h2> Ahmad </h2>
                                        <p class="title">Developer &amp; Databases</p>
                                        <p>ahmad_karkouty@hotmail.com</p>
                                        <p>
                                            <button class="button">Contact</button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card w3-card-4" style="border-radius: 10px;">
                                    <img src="images/0.jpg" alt="Franck" style="width:30%">
                                    <div class="container">
                                        <h2>Franck Ndame</h2>
                                        <p class="title">Architect</p>
                                        <p>franck.mpouli@yahoo.com</p>
                                        <p>
                                            <button class="button" onclick="contactUs()">Contact</button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card w3-card-4" style="border-radius: 10px;">
                                    <img src="images/dhruva.jpg" alt="Dhruva" style="width:30%">
                                    <div class="container">
                                        <h2> Dhruva </h2>
                                        <p class="title">Architect</p>
                                        <p>21298784@student.uwl.ac.uk</p>
                                        <p>
                                            <button class="button">Contact</button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card w3-card-4" style="border-radius: 10px;">
                                    <img src="images/rosh.jpg" alt="Rosh" style="width:30%">
                                    <div class="container">
                                        <h2> Rosh </h2>
                                        <p class="title">Test & Evaluation</p>
                                        <p>rosh@uk-eps.com</p>
                                        <p>
                                            <button class="button">Contact</button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="google_translate_element"></div>
                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                        <p>Diet brain, Copyright &copy; 2018 </p>

                    </footer>


                    </div>
            </body>

    </html>
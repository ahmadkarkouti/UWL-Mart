<?php
   session_start(); 
   ?>
<!DOCTYPE html>
<!-- Basic web page -->
<html lang ="en">
   <!--        HEAD        -->
   <head>
      <meta charset="UTF-8">
      <!-- Character set -->
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
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="icon" type="images/png" href="images/logo copy.png" sizes="32x32">
      <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="ism/css/my-slider.css"/>
      <script src="ism/js/ism-2.2.min.js"></script>
      <title> UWLMart | Account </title>
      <script src="script.js"></script>
      <script type="text/javascript" src="java.js"></script>
      <link rel="stylesheet" href="accountCss.css">
          <link rel="stylesheet" type="text/css" href="mobileStyle.css">
   </head>
  


   <?php  
      $result = '';
      $hide1 = '';
      $hide2 = '';
      $account = '';
      $details = '';
      $hide3 = '';
      $hide4 = '';
      include 'dbh.php';
              $sqlyy = "SELECT * FROM registration WHERE fname = '".$_SESSION['fname']."'";
              $result = $conn->query($sqlyy);
              
              if ($result->num_rows > 0) {
      
                  while($row = $result->fetch_assoc()) {            
                      $jumper = $row['picture'];
      }
      }
      
      if(isset($_SESSION['fname']))  
      {  
      $result = 'Hello, ' .  $_SESSION['fname'];
      $account  = 'account.php';
      $details = '<img width= 250px; height = 250px; src='.$jumper.' style="display:block; margin-left:auto; margin-right:auto; border-radius:1000px; " class="w3-card-4"></br></br>
      <hr> 

      <a style=" background-color:#515d70; color:white; border-radius:10px; padding:10px 10px 10px 10px;">First Name: </a>'. '&nbsp; &nbsp; &nbsp; &nbsp;'. $_SESSION['fname']. '<hr>' .
      '</br><a style=" background-color:#515d70; color:white; border-radius:10px; padding:10px 10px 10px 10px;">Last Name: </a>'. '&nbsp; &nbsp; &nbsp; &nbsp;'. $_SESSION['lname']. '<hr>' .
      '</br><a style=" background-color:#515d70; color:white; border-radius:10px; padding:10px 10px 10px 10px;">Date of Birth: </a>'. '&nbsp; &nbsp; '. $_SESSION['dob']. '<hr>' .
      '</br><a style=" background-color:#515d70; color:white; border-radius:10px; padding:10px 10px 10px 10px;">Address Line: </a>'. '&nbsp; &nbsp; '. $_SESSION['address1']. '<hr>' .
      '<a style="font-weight:700;">City: </a>'. $_SESSION['address2']. 
      '</br><a style="font-weight:700;">Post Code: </a>'. $_SESSION['pcode']. 
      '</br><a style="font-weight:700;">Country: </a>'. $_SESSION['country']. 
      '</br><a style="font-weight:700;">Email Address: </a>'. $_SESSION['eaddress'] ;

      
      
                   
      
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
                  <li><a href="<?php echo $account; ?>" id="loginitem" id="loginitem" class="fa fa-user-circle-o">
                    <?php echo $result; ?> </a></li>
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
                            <br><br>
                            
                            
                            
                            <!-- <hr> -->                    
                            
                            <div id="myNav" class="overlay2">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <div class="containerBar overlay-content" style="margin-top: -50px;">
                                    <ul>
                                        <li><a href="index.php" class="fa fa-home"> Home </a></li>
                                        <li><a href="groceries.php" class="fa fa-cart-arrow-down"> Groceries </a></li>
                                        <li><a href="clothing.php" class="fa fa-tags"> Clothing </a></li>
                                        <li class="current"><a href="<?php echo $account; ?>" class="fa fa-male "> Your account </a></li>
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
                                    <hr>
                                </div>
                            </div>
                        </div>
                        
                                                    <span style="font-size:30px;cursor:pointer;" class="openbtn fa fa-bars" onclick="openNav()" id="navbar"></span>

    </header>



<?php
include 'dbh.php';


$sql = "SELECT * FROM registration WHERE eaddress='".$_SESSION['eaddress']."'";

$result = mysqli_query($conn, $sql);

while($row = $result->fetch_assoc()) {
    $_SESSION['picture'] = $row['picture'];
    $_SESSION['fname'] = $row['fname'];
    $_SESSION['lname'] = $row['lname'];
    $_SESSION['dob'] = $row['dob'];
    $_SESSION['address1'] = $row['address1'];
    $_SESSION['address2'] = $row['address2'];
    $_SESSION['pcode'] = $row['pcode'];
    $_SESSION['country'] = $row['country'];
    $_SESSION['eaddress'] = $row['eaddress'];
    $_SESSION['pword'] = $row['pword'];
} 




?> 




         <body>
            <!-- <p style="font-size: 20px;" >Your account</p> -->
            <link rel="stylesheet" type="text/css" href="mobileStyle.css">
            <div id="tabla">
            <div class="tab">
               <button class="tablinks fa fa-drivers-license" onclick="openCity(event, 'London')" id="defaultOpen" style="text-align: center;"> Details</button>
               <button class="tablinks  fa fa-truck" onclick="openCity(event, 'Paris')" style="text-align: center;"> Orders</button>
               <button class="tablinks fa fa-credit-card" onclick="openCity(event, 'Tokyo')" style="text-align: center;"> Payment details</button>
            </div>
          </div>

            <div id="London" class="tabcontent">
               <h3 style="text-align: center; font-weight: 400; background-color: #515d70; color: white; border-radius: 5px; height: 60px; padding-top: 10px; font-family: serif;" class="w3-card-4">Your Details</h3>
               <hr>
               <?php echo $details; ?>
               <?php echo $hide3; ?>
               <br><br><br>
               <div class="container" style="padding-left: 20px; width: 100%;">
                 <form method="get" action="employee.php">

                    <br><br><br>
                    <button type="submit" id="empButton" class="tablinks w3-card-4" style="float: right; margin-left: 10px;">Employees Page</button>
                 </form>
                 <?php echo $hide4; ?>
                 <!-- <?php echo $hide3; ?><form method="get" action="edit.php"> -->

                 <button type="submit" id="empButton" class="tablinks w3-card-4" onclick="openCity(event, 'editor')" style="float: right;">Update details</button></form>
              </div>
                                      <div id="google_translate_element"></div>
                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
               <?php $sassy = $_SESSION['fname']; ?>
            </div>

            <div id="editor" class="tabcontent">
              <br><br>
            <form class="w3-container"  action="imageadd.php" method="POST">
               <div class="w3-container">
                  <!-- <label>Picture:</label> -->
                  <input type="text" name ="someone" style="display: none;" value="<?php echo $_SESSION['fname'] ?>"/>
                  <input type="text" class="w3-input" style="display: none;" id="b64" name="picture" value="<?php echo $_SESSION['picture']; ?>" />

                  <input id="inp" type="file" class="w3-card-4">
                  <br><br>

                  <p><img id="img" height="150" src="<?php echo $_SESSION['picture']; ?>"></p>
            <input type="text" name="efname" value="<?php echo $_SESSION['fname']; ?>">
            <input type="text" name="elname" value="<?php echo $_SESSION['lname']; ?>">
            <input type="text" name="edob" value="<?php echo $_SESSION['dob']; ?>">
            <input type="text" name="emnumber" value="<?php echo $_SESSION['mnumber']; ?>">
            <input type="text" name="eaddresse" value="<?php echo $_SESSION['address1']; ?>">
            <input type="text" name="ecity" value="<?php echo $_SESSION['address2']; ?>">
            <input type="text" name="epcode" value="<?php echo $_SESSION['pcode']; ?>">
            <input type="text" name="ecountry" value="<?php echo $_SESSION['country']; ?>">
            <input type="text" name="eeaddress" value="<?php echo $_SESSION['eaddress']; ?>">
            <input type="password" name="epword" value="<?php echo $_SESSION['pword']; ?>">

                  <p><button type="submit" id="empButton" style="display: none;">Add picture</button></p>
            </form>
            <br><br>
            <hr>
            <script type="text/javascript"> function readFile() {
               if (this.files && this.files[0]) {
                 
                 var FR= new FileReader();
                 
                 FR.addEventListener("load", function(e) {
                   document.getElementById("img").src       = e.target.result;
                   document.getElementById("b64").value = e.target.result;
                 }); 
                 
                 FR.readAsDataURL( this.files[0] );
                 
               }
               
               }
               
               document.getElementById("inp").addEventListener("change", readFile);
            </script>  
            <br>
            <br>
            <div class="container" style="padding-left: 8px; padding-right: 8px; width: 100%; margin-bottom: 20px;">
              <button type="submit" id="empButton" class="tablinks w3-card-4" onclick="openCity(event, 'London')" style="float: right; background-color: green; border:none; ">Save changes</button>
              <button type="submit" id="empButton" class="tablinks w3-card-4" onclick="openCity(event, 'London')" style="float: left; background-color: red; border:none;">Cancel</button>
            </div> 
            </div>
            </form> 
          </div>
            <div id="Paris" class="tabcontent">
              <h2 style="text-align: center; font-family: serif;">Recent Orders</h2>
              <hr>
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
              <h2 style="text-align: center; font-family: serif;">Payement Methods</h2>
              <hr>
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
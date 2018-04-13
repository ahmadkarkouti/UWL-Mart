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
         <title> UWLMart | Groceries </title>
        <script src="script.js"></script>
        <script type="text/javascript" src="java.js"></script>
        <link rel="stylesheet" href="design.css">

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

<script>
  window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

  <style>
        
.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: black;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    font-family: Bookman;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.dropdown2 {
    float: left;
    overflow: hidden;
}

.dropdown2 .dropbtn2 {
    font-size: 16px;    
    border: none;
    outline: none;
    color: black;
    font-family: inherit;
    margin: 0;
}

.dropdown2-content2 {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown2-content2 a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown2-content2 a:hover {
    background-color: #ddd;
}

.dropdown2:hover .dropdown2-content2 {
    display: block;
}
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}




#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
body{
  background-color: linen;

}

h1{
  color: red;
}

header{
  /*background-color: linen;*/
  border-bottom: 1px dotted orange;
}
  </style>
  
<body>    
    <div class="topNav">
        <div class="w3-xlarge ">
        <form action="logout.php">
            <ul>
                <li><a href="viewCart.php" class="fa fa-shopping-basket"> Basket </a></li>               
                <li><a href="<?php echo $account; ?>" id="loginitem" id="loginitem" class="fa fa-user-circle-o"><?php echo $result; ?> </a></li>
                <?php echo $hide1; ?> <button type="submit" style="background-color:orange;background-repeat:no-repeat; border: none; border-radius: 10px; cursor:pointer;display: inline-flex; align-items: flex-start; color: white; float: left;"><a id="desktopOnly" >Logout</a></button><?php echo $hide2; ?>
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
                                <br>
                            </div>
                            <!-- <hr> -->

           <ul> 
                <li><a href="index.php" class="fa fa-home"> Home </a></li>

                    <li class="current"> <a href="groceries.php" class="fa fa-cart-arrow-down"> Groceries </a>
                    </li>


  
                <li><a href="clothing.php" class="fa fa-tags"> Clothing </a></li>
                 
                
              

                <li><a href="<?php echo $account; ?>" class="fa fa-male"> Your account </a></li>
            </ul>
        </div>
    
<br><br>
  
   
    </header>

     
<!-- <div class="wrap">
   <div class="search">
    <form action="groceries.php" method="POST">
      <input type="text" class="searchTerm" name="searchy">
      <button type="submit" class="searchButton">
    </form>
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>
 -->
<?php
$searchy = $_POST['searchy'];
$sql = "SELECT * FROM products WHERE description LIKE'%" . $searchy ."%'";

?>
   
             <?php
        include 'dbh.php';
        
        if ($searchy == "") {
            $sql = "SELECT * FROM products";
        }
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                //echo "<div id='divMessage' class='InsideContent'> <div class='product'> <img src=". $row['trying']. "> <div class='product-actions'> <div class='product-info'> <div class='info-block'> <div class='product-title'>"
                //. $row["brand"]. "</div> <div class='product-description'>" . $row["type"] ."</div> <div class='product-sale'>£"
                //. $row["price"]. "</div> <div class='button-buy'>Buy now</div> <div class='add'>Add</div> </div> </div> </div>";
					if($row['stock'] < 1){
						$row['name'] = 'OUT OF STOCK';
						$row['id'] = '0';}
				else { $row['name'] = $row['name'];
					  $row['id'] = $row['id'];
					 }
				
                echo "<ul><div id='divMessage' class='InsideContent'> <div class='product' style='border-radius:45px; border-bottom-left-radius:0; border-bottom-right-radius:0;'> <img style='border-radius:45px; border-bottom-left-radius:0; border-bottom-right-radius:0; border:1px solid orange;' class='w3-card-4' src="
                . $row['picture']. "> <div class='product-actions'> <div class='product-info'> <div class='info-block w3-card-4' style='border-top-left-radius: 45px; border-top-right-radius: 45px; '> <div class='product-title'>" 
                . $row['name']. "</div> <div class='product-description' >"
                . $row['description']. "</div> <div class='product-sale'>£"
                . $row['price']. "</div>   <a class='button-buy' href='cartAction.php?action=addToCart&id=" .$row['id']. "'> Add</a> </div> </div> </div></ul>";
            }
        } else {
            echo "0 results";
        }
        
        ?>
                                <div id="google_translate_element"></div>
                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </body>
</html>

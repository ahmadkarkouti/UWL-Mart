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
    <script data-main="scripts/main.js" src="require.js"></script>
    
    
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

</br>
</br>

</body> 

<script>
      /* exported __kof_1*/
      /* exported __kof_2*/
      /* exported __kof_3*/
      /* exported __kof_4*/
      /* exported __kof_5*/
</script>
     
    <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'Groceries');">Add Groceries</button>
    <button class="tablinks" onclick="openCity(event, 'Groceriesdb');">Groceries db</button>
    <button class="tablinks" onclick="openCity(event, 'Clothes');">Add Clothes</button>
    <button class="tablinks" onclick="openCity(event, 'Clothesdb');">Clothes db</button>
    <button class="tablinks" onclick="openCity(event, 'Tokyo');">Registration</button>
    </div>
    
    <div id="Groceries" class="tabcontent">
            <div  class="w3-display-middle"
            <form class="w3-container">
            <div class="w3-container w3-blue">
            <h2>Add some groceries</h2>
            </div>
            </br>
            <label>Brand:</label>
            <input type="text" class="w3-input" id="groceriesbrand" />
            <br />
            <label>Type:</label>
            <input type="text" class="w3-input" id="groceriestype" />
            <br />
            <label>Stock:</label>
            <input type="text" class="w3-input" id="groceriesstock" />
            <br />
            <label>Price:</label>
            <input type="text" class="w3-input" id="groceriesprice" />
            <br />
            <label>Picture:</label>
            <input id="inp" type="file">
            <p id="b64"></p>
            <img id="img" height="150">
            <button type="button" id="addgroceries" onclick="addGroceries();">Add Groceries</button>
            </form> <script type="text/javascript"> function readFile() {
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
            
        </div> </div>

    <div id="Groceriesdb" class="tabcontent">
        
    
        <h3>Groceries List</h3>
        <table id="grocerieslist">
            <tr>
            <th>Image</th>
            <th>Brand</th>
            <th>Type</th>
            <th>Stock</th>
            <th>Price</th>
            <th>Delete</th>
            </tr>
        </table>
    </div>
    
    
            
    <div id="Clothes" class="tabcontent">
        
        <div  class="w3-display-middle"
            <form class="w3-container">
            <div class="w3-container w3-blue">
            <h2>Add some Clothes</h2>
            </div>
            </br>
            <label>Brand:</label>
            <input type="text" class="w3-input" id="clothesbrand" />
            <br />
            <label>Type:</label>
            <input type="text" class="w3-input" id="clothestype" />
            <br />
            <label>Stock:</label>
            <input type="text" class="w3-input" id="clothesstock" />
            <br />
            <label>Price:</label>
            <input type="text" class="w3-input" id="clothessprice" />
            <br />
            <label>Picture:</label>
            <input id="inp2" type="file">
            <p id="b65"></p>
            <img id="img2" height="150">
            <button type="button" id="addClothes" onclick="addClothes();">Add Clothes</button>
            </form> <script type="text/javascript"> function readFile() {
            if (this.files && this.files[0]) {
              
              var FR= new FileReader();
              
              FR.addEventListener("load", function(e) {
                document.getElementById("img2").src       = e.target.result;
                document.getElementById("b65").value = e.target.result;
              }); 
              
              FR.readAsDataURL( this.files[0] );
              
            }
            
          }
          
          document.getElementById("inp2").addEventListener("change", readFile);
          
          
            </script>
            
        </div> </div>
        
    <div id="Clothesdb" class="tabcontent">
        <h3>Clothes List</h3>
        <table id="clotheslist">
            <tr>
            <th>Image</th>
            <th>Brand</th>
            <th>Type</th>
            <th>Stock</th>
            <th>Price</th>
            <th>Delete</th>
            </tr>
        </table>
    </div>
    <div id="Tokyo" class="tabcontent">
      <h3>Registration List</h3>
      <div class="w3-container">
        <table id="registrationlist">
            <tr>
            <th>FirstName</th>
            <th>LastName</th>
            <th>DOB</th>
            <th>MobileNumber</th>
            <th>Email Address</th>
            <th>AddressLine</th>
            <th>City</th>
            <th>PostCode</th>
            <th>Country</th>
            <th>Password</th>
            <th>Delete</th>
            </tr>
        </table>
      </div>    






        
</body>

    </header>
</html>
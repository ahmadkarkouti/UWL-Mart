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
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="advancedcss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="images/png" href="images/logo copy.png" sizes="32x32">
    <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">    
    <script type="text/javascript" src="java.js"  charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="accountCss.css">
    <link rel="stylesheet" type="text/css" href="mobileStyle.css">
    <script src="script.js"></script>
    <title> UWLMart | Employees Page </title>
    

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
        <div class="w3-xlarge">
        <form action="logout.php">
            <ul>
                <li><a href="viewCart.php" class="fa fa-shopping-basket"> Basket </a></li>               
                <li><a href="<?php echo $account; ?>" id="loginitem" id="loginitem" class="fa fa-user-circle-o"><?php echo $result; ?> </a></li>
                                    <?php echo $hide1; ?>
                                        <button type="submit" style="background-color:orange;background-repeat:no-repeat; border: none; border-radius: 10px; cursor:pointer;display: inline-flex; align-items: flex-start; color: white; float: left;"><a id="desktopOnly" >Logout</a></button>
                                        <?php echo $hide2; ?>
            </ul>
        </form>
        </div>            
    </div>

    
    <!-- <div class="w3-container"> -->
    <header>

  
                        <div class="container4">
                            <div id="brand" style="margin-bottom: -10px;">
                                <p>
                                    <i href="index.php"><img src="images/logo.png" alt="UwlMart logo" style="width:250px;height:100px;"></i>
                                </p>
                            </div>
                            <!-- <hr> -->
                            <br><br>
                            <hr>
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
                                    <br>

                                </div>
                            </div>
                        </div>
                                                    <span style="font-size:30px;cursor:pointer;" class="openbtn fa fa-bars" onclick="openNav()" id="navbar"></span>

</header>

<!-- <a class="mobileOnly" style="background-color: red; width: 900px; ">HEHEH</a> -->

<script>
      /* exported __kof_1*/
      /* exported __kof_2*/
      /* exported __kof_3*/
      /* exported __kof_4*/
      /* exported __kof_5*/
      /* exported __kof_6*/
      /* exported __kof_7*/
      /* exported __kof_8*/
      /* exported __kof_9*/
</script>



<!-- MAIN TAB      -->
    <div class="tab" id="desktopOnly">
    <button class="tablinks fa fa-pie-chart" onclick="openCity(event, 'Marketing');"> Marketing</button>
    <button class="tablinks fa fa-shopping-cart" onclick="openCity(event, 'Groceriesdb');"> Available Groceries</button>
    <button class="tablinks     fa fa-black-tie" onclick="openCity(event, 'Clothesdb');"> Available Clothes</button>
    <button class="tablinks fa fa-plus-square" onclick="openCity(event, 'Groceries');"> Add Groceries</button>

    <button class="tablinks fa fa-plus-square-o" onclick="openCity(event, 'Clothes');"> Add Clothes</button>
        <button class="tablinks fa fa-check-square" onclick="openCity(event, 'Restock');"> Restock</button>

    <button class="tablinks  fa fa-address-book" onclick="openCity(event, 'Registration');"> Registrations</button>
    <button class="tablinks fa fa-cubes" onclick="openCity(event, 'Orders');"> Orders</button>
    <button class="tablinks fa fa-cube" onclick="openCity(event, 'OrderItems');"> Order items</button>

    </div>
        <div id="tablo">
            <div class="taby" id="mobileOnly">
                <button class="tablinks fa fa-pie-chart" onclick="openCity(event, 'Marketing');"></button>
                <button class="tablinks fa fa-shopping-cart" onclick="openCity(event, 'Groceriesdb');"></button>
                <button class="tablinks     fa fa-black-tie" onclick="openCity(event, 'Clothesdb');"> </button>
                <button class="tablinks fa fa-plus-square" onclick="openCity(event, 'Groceries');"></button>

                <button class="tablinks fa fa-plus-square-o" onclick="openCity(event, 'Clothes');"></button>
                    <button class="tablinks fa fa-check-square" onclick="openCity(event, 'Restock');"></button>

                <button class="tablinks  fa fa-address-book" onclick="openCity(event, 'Registration');"></button>
                <button class="tablinks fa fa-cubes" onclick="openCity(event, 'Orders');"></button>
                <button class="tablinks fa fa-cube" onclick="openCity(event, 'OrderItems');"></button>

            </div>
        </div>
                                <div id="google_translate_element"></div>
                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
    <div id="Marketing" class="tabcontent" >
     <style>
        #inner {
  width: 50%;
  margin: 0 auto;
}
        </style>
       
                 <?php
    $datefrom = $_POST['datefrom'];
    $dateto = $_POST['dateto'];
        include 'dbh.php';
        $sql = "SELECT productnames.description, sum(quantity), orders.created FROM order_items, productnames, orders WHERE order_items.order_id = orders.id AND productnames.id = order_items.product_id AND orders.created BETWEEN '".$datefrom."' AND '".$dateto."' AND order_items.product_id < 100 group by order_items.product_id";
        $result = $conn->query($sql);
        $c = 0;
        if ($result->num_rows > 0) {
        $nov = '';
        $message = $result->num_rows;
        echo "<script type='text/javascript'>
        var dating = '".$datefrom."';
        var dating2 = '".$dateto."';
        var elementi = [];
        var labels = [];
        var values = [];
        var V = [];
        var T = [];
        var i = -1;
        var linez;
        var linez2;
        var linez3;
        var linez4;
        var prof1;
        var prof2;
        var tots;
        var tots3;
        var totally;
        var totally2;
        </script>";
        while($row = $result->fetch_assoc()) {
        $c = $c + 1;
        echo "<script type='text/javascript'> var chartcount = ".$message." ;</script>";
        echo "<script type='text/javascript'>
                i = i + 1;
                T[i] = '".$row['description']."';
                V[i] = ".$row['sum(quantity)'].";
                elementi.push({'y': V[i], 'label': T[i]});
                labels[i] = T[i];
                values[i] = V[i];
                </script>";
        
        } 
            
 

                        $sqltal = "SELECT order_items.product_id, sum(quantity), SUBSTRING(orders.created, 6, 2), orders.created, products.price, products.price * sum(quantity) AS multiple, HQ FROM order_items, orders, products, (SELECT sum(multiple) AS HQ FROM (SELECT order_items.product_id, sum(quantity), orders.created, products.price, products.price * sum(quantity) AS multiple FROM order_items, orders, products WHERE order_items.product_id = products.id AND order_items.order_id = orders.id AND orders.created BETWEEN '".$datefrom."' AND '".$dateto."' AND order_items.product_id < 100 group by order_items.product_id) a) g WHERE order_items.product_id = products.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-01-01' AND '2018-12-31' AND order_items.product_id < 100 group by order_items.product_id";
                        $result = $conn->query($sqltal);

                        if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<script type='text/javascript'> tots = ".$row['HQ'].";</script>";
                        }}; 
            
            
                                    $sqltali2 = "SELECT sum(wholesaly) AS bye, sum(multiple - wholesaly) AS hello FROM
(SELECT order_items.product_id, sum(quantity), SUBSTRING(orders.created, 6, 2), orders.created, products.price, products.price * sum(quantity) AS multiple , products.wholesale * sum(quantity) AS wholesaly , HQ FROM order_items, orders, products, (SELECT sum(multiple) AS HQ FROM (SELECT order_items.product_id, sum(quantity), orders.created, products.price, products.price * sum(quantity) AS multiple FROM order_items, orders, products WHERE order_items.product_id = products.id AND order_items.order_id = orders.id AND orders.created BETWEEN '".$datefrom."' AND '".$dateto."' AND order_items.product_id < 100 group by order_items.product_id) a) g WHERE order_items.product_id = products.id AND order_items.order_id = orders.id AND orders.created BETWEEN '".$datefrom."' AND '".$dateto."' AND order_items.product_id < 100 group by order_items.product_id) g";
                        $result = $conn->query($sqltali2);

                        if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<script type='text/javascript'> tots3 = '£".$row['hello']."';</script>";
                            echo "<script type='text/javascript'> holla = '£".$row['bye']."';</script>";
                        
                        }};
            
                                                $sqltaliz = "SELECT order_items.product_id, sum(quantity), SUBSTRING(orders.created, 6, 2), orders.created, products.price, products.price * sum(quantity) AS multiple, HQ FROM order_items, orders, products, (SELECT sum(multiple) AS HQ FROM (SELECT order_items.product_id, sum(quantity), orders.created, products.price, products.price * sum(quantity) AS multiple FROM order_items, orders, products WHERE order_items.product_id = products.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-02-01' AND '2018-02-28' AND order_items.product_id < 100 group by order_items.product_id) a) g WHERE order_items.product_id = products.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-01-01' AND '2018-12-31' AND order_items.product_id < 100 group by order_items.product_id";
                        $result = $conn->query($sqltaliz);

                        if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<script type='text/javascript'> linez = ".$row['HQ'].";</script>";
                        
                        }};
                                                            $sqltaliz2 = "SELECT order_items.product_id, sum(quantity), SUBSTRING(orders.created, 6, 2), orders.created, products.price, products.price * sum(quantity) AS multiple, HQ FROM order_items, orders, products, (SELECT sum(multiple) AS HQ FROM (SELECT order_items.product_id, sum(quantity), orders.created, products.price, products.price * sum(quantity) AS multiple FROM order_items, orders, products WHERE order_items.product_id = products.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-03-01' AND '2018-03-31' AND order_items.product_id < 100 group by order_items.product_id) a) g WHERE order_items.product_id = products.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-01-01' AND '2018-12-31' AND order_items.product_id < 100 group by order_items.product_id";
                        $result = $conn->query($sqltaliz2);

                        if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<script type='text/javascript'> linez2 = ".$row['HQ'].";</script>";
                        
                        }};
                                                            $sqltaliz3 = "SELECT order_items.product_id, sum(quantity), SUBSTRING(orders.created, 6, 2), orders.created, products2.price, products2.price * sum(quantity) AS multiple, HQ FROM order_items, orders, products2, (SELECT sum(multiple) AS HQ FROM (SELECT order_items.product_id, sum(quantity), orders.created, products2.price, products2.price * sum(quantity) AS multiple FROM order_items, orders, products2 WHERE order_items.product_id = products2.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-02-01' AND '2018-02-28' AND order_items.product_id >= 100 group by order_items.product_id) a) g WHERE order_items.product_id = products2.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-01-01' AND '2018-12-31' AND order_items.product_id >= 100 group by order_items.product_id";
                        $result = $conn->query($sqltaliz3);

                        if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<script type='text/javascript'> linez3 = ".$row['HQ'].";</script>";
                        
                        }};
            
                                                            $sqltaliz4 = "SELECT order_items.product_id, sum(quantity), SUBSTRING(orders.created, 6, 2), orders.created, products2.price, products2.price * sum(quantity) AS multiple, HQ FROM order_items, orders, products2, (SELECT sum(multiple) AS HQ FROM (SELECT order_items.product_id, sum(quantity), orders.created, products2.price, products2.price * sum(quantity) AS multiple FROM order_items, orders, products2 WHERE order_items.product_id = products2.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-03-01' AND '2018-03-31' AND order_items.product_id >= 100 group by order_items.product_id) a) g WHERE order_items.product_id = products2.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-01-01' AND '2018-12-31' AND order_items.product_id >= 100 group by order_items.product_id";
                        $result = $conn->query($sqltaliz4);

                        if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<script type='text/javascript'> linez4 = ".$row['HQ'].";</script>";
                        
                        }};
                                                $sqlprof1 = "SELECT sum(hello) AS febprof FROM
(SELECT sum(wholesaly) AS bye, sum(multiple - wholesaly) AS hello FROM
(SELECT order_items.product_id, sum(quantity), SUBSTRING(orders.created, 6, 2), orders.created, products.price, products.price * sum(quantity) AS multiple , products.wholesale * sum(quantity) AS wholesaly , HQ FROM order_items, orders, products, (SELECT sum(multiple) AS HQ FROM (SELECT order_items.product_id, sum(quantity), orders.created, products.price, products.price * sum(quantity) AS multiple FROM order_items, orders, products WHERE order_items.product_id = products.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-02-01' AND '2018-02-28' group by order_items.product_id) a) g WHERE order_items.product_id = products.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-02-01' AND '2018-02-28' group by order_items.product_id) g
UNION
SELECT sum(wholesaly) AS bye, sum(multiple - wholesaly) AS hello FROM
(SELECT order_items.product_id, sum(quantity), SUBSTRING(orders.created, 6, 2), orders.created, products2.price, products2.price * sum(quantity) AS multiple , products2.wholesale * sum(quantity) AS wholesaly , HQ FROM order_items, orders, products2, (SELECT sum(multiple) AS HQ FROM (SELECT order_items.product_id, sum(quantity), orders.created, products2.price, products2.price * sum(quantity) AS multiple FROM order_items, orders, products2 WHERE order_items.product_id = products2.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-02-01' AND '2018-02-28' AND order_items.product_id >= 100 group by order_items.product_id) a) g WHERE order_items.product_id = products2.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-02-01' AND '2018-02-28' AND order_items.product_id >= 100 group by order_items.product_id) g) j";
                        $result = $conn->query($sqlprof1);

                        if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<script type='text/javascript'> prof1 = ".$row['febprof'].";</script>";
                        
                        }};
    };

                                    $sqlprof2 = "SELECT sum(hello) AS febprof FROM
(SELECT sum(wholesaly) AS bye, sum(multiple - wholesaly) AS hello FROM
(SELECT order_items.product_id, sum(quantity), SUBSTRING(orders.created, 6, 2), orders.created, products.price, products.price * sum(quantity) AS multiple , products.wholesale * sum(quantity) AS wholesaly , HQ FROM order_items, orders, products, (SELECT sum(multiple) AS HQ FROM (SELECT order_items.product_id, sum(quantity), orders.created, products.price, products.price * sum(quantity) AS multiple FROM order_items, orders, products WHERE order_items.product_id = products.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-03-01' AND '2018-03-31' group by order_items.product_id) a) g WHERE order_items.product_id = products.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-03-01' AND '2018-03-31' group by order_items.product_id) g
UNION
SELECT sum(wholesaly) AS bye, sum(multiple - wholesaly) AS hello FROM
(SELECT order_items.product_id, sum(quantity), SUBSTRING(orders.created, 6, 2), orders.created, products2.price, products2.price * sum(quantity) AS multiple , products2.wholesale * sum(quantity) AS wholesaly , HQ FROM order_items, orders, products2, (SELECT sum(multiple) AS HQ FROM (SELECT order_items.product_id, sum(quantity), orders.created, products2.price, products2.price * sum(quantity) AS multiple FROM order_items, orders, products2 WHERE order_items.product_id = products2.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-03-01' AND '2018-03-31' group by order_items.product_id) a) g WHERE order_items.product_id = products2.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-03-01' AND '2018-03-31' group by order_items.product_id) g) j";
                        $result = $conn->query($sqlprof2);

                        if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<script type='text/javascript'> prof2 = ".$row['febprof'].";</script>";
                        
                        }};

                        $sqltaltotal = "SELECT sum(HQ) AS total FROM
(SELECT order_items.product_id, sum(quantity), SUBSTRING(orders.created, 6, 2), orders.created, products.price, products.price * sum(quantity) AS multiple, HQ FROM order_items, orders, products, (SELECT sum(multiple) AS HQ FROM (SELECT order_items.product_id, sum(quantity), orders.created, products.price, products.price * sum(quantity) AS multiple FROM order_items, orders, products WHERE order_items.product_id = products.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-02-01' AND '2018-02-28' AND order_items.product_id < 100 group by order_items.product_id) a) g WHERE order_items.product_id = products.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-01-01' AND '2018-12-31' AND order_items.product_id < 100 group by HQ
UNION
SELECT order_items.product_id, sum(quantity), SUBSTRING(orders.created, 6, 2), orders.created, products2.price, products2.price * sum(quantity) AS multiple, HQ FROM order_items, orders, products2, (SELECT sum(multiple) AS HQ FROM (SELECT order_items.product_id, sum(quantity), orders.created, products2.price, products2.price * sum(quantity) AS multiple FROM order_items, orders, products2 WHERE order_items.product_id = products2.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-02-01' AND '2018-02-28' AND order_items.product_id >= 100 group by order_items.product_id) a) g WHERE order_items.product_id = products2.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-01-01' AND '2018-12-31' AND order_items.product_id >= 100 group by HQ) Z";
                        $result = $conn->query($sqltaltotal);

                        if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<script type='text/javascript'> totally = ".$row['total'].";</script>";
                        }}; 
            
                        $sqltaltotal2 = "SELECT sum(HQ) AS total FROM
(SELECT order_items.product_id, sum(quantity), SUBSTRING(orders.created, 6, 2), orders.created, products.price, products.price * sum(quantity) AS multiple, HQ FROM order_items, orders, products, (SELECT sum(multiple) AS HQ FROM (SELECT order_items.product_id, sum(quantity), orders.created, products.price, products.price * sum(quantity) AS multiple FROM order_items, orders, products WHERE order_items.product_id = products.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-03-01' AND '2018-03-31' AND order_items.product_id < 100 group by order_items.product_id) a) g WHERE order_items.product_id = products.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-01-01' AND '2018-12-31' AND order_items.product_id < 100 group by HQ
UNION
SELECT order_items.product_id, sum(quantity), SUBSTRING(orders.created, 6, 2), orders.created, products2.price, products2.price * sum(quantity) AS multiple, HQ FROM order_items, orders, products2, (SELECT sum(multiple) AS HQ FROM (SELECT order_items.product_id, sum(quantity), orders.created, products2.price, products2.price * sum(quantity) AS multiple FROM order_items, orders, products2 WHERE order_items.product_id = products2.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-03-01' AND '2018-03-31' AND order_items.product_id >= 100 group by order_items.product_id) a) g WHERE order_items.product_id = products2.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-01-01' AND '2018-12-31' AND order_items.product_id >= 100 group by HQ) Z";
                        $result = $conn->query($sqltaltotal2);

                        if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<script type='text/javascript'> totally2 = ".$row['total'].";</script>";
                        }};

        $sql = "SELECT productnames.description, sum(quantity), orders.created FROM order_items, productnames, orders WHERE order_items.order_id = orders.id AND productnames.id = order_items.product_id AND orders.created BETWEEN '".$datefrom."' AND '".$dateto."' AND order_items.product_id >= 100 group by order_items.product_id";
        $result = $conn->query($sql);
        $c = 0;
        if ($result->num_rows > 0) {
        $nov = '';
        $message = $result->num_rows;
        echo "<script type='text/javascript'>
        var dating = '".$datefrom."';
        var dating2 = '".$dateto."';
        var elementi2 = [];
        var labels2 = [];
        var values2 = [];
        var tots2;
        var tots4;
        var V2 = [];
        var T2 = [];
        var i = -1;
        var holla2;
        </script>";
        while($row = $result->fetch_assoc()) {
        $c = $c + 1;
        echo "<script type='text/javascript'> var chartcount = ".$message." ;</script>";
        echo "<script type='text/javascript'>
                i = i + 1;
                T2[i] = '".$row['description']."';
                V2[i] = ".$row['sum(quantity)'].";
                elementi2.push({'y': V2[i], 'label': T2[i]});
                labels2[i] = T2[i];
                values2[i] = V2[i];
                </script>";
        
        } 
                        $sqltali = "SELECT order_items.product_id, sum(quantity), SUBSTRING(orders.created, 6, 2), orders.created, products2.price, products2.price * sum(quantity) AS multiple, HQ FROM order_items, orders, products2, (SELECT sum(multiple) AS HQ FROM (SELECT order_items.product_id, sum(quantity), orders.created, products2.price, products2.price * sum(quantity) AS multiple FROM order_items, orders, products2 WHERE order_items.product_id = products2.id AND order_items.order_id = orders.id AND orders.created BETWEEN '".$datefrom."' AND '".$dateto."' AND order_items.product_id >= 100 group by order_items.product_id) a) g WHERE order_items.product_id = products2.id AND order_items.order_id = orders.id AND orders.created BETWEEN '2018-01-01' AND '2018-12-31' AND order_items.product_id >= 100 group by order_items.product_id";
                        $result = $conn->query($sqltali);

                        if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<script type='text/javascript'> tots2 = ".$row['HQ'].";</script>";
                        }};

                        $sqltali1 = "SELECT sum(wholesaly) AS bye, sum(multiple - wholesaly) AS hello FROM
(SELECT order_items.product_id, sum(quantity), SUBSTRING(orders.created, 6, 2), orders.created, products2.price, products2.price * sum(quantity) AS multiple , products2.wholesale * sum(quantity) AS wholesaly , HQ FROM order_items, orders, products2, (SELECT sum(multiple) AS HQ FROM (SELECT order_items.product_id, sum(quantity), orders.created, products2.price, products2.price * sum(quantity) AS multiple FROM order_items, orders, products2 WHERE order_items.product_id = products2.id AND order_items.order_id = orders.id AND orders.created BETWEEN '".$datefrom."' AND '".$dateto."' AND order_items.product_id >= 100 group by order_items.product_id) a) g WHERE order_items.product_id = products2.id AND order_items.order_id = orders.id AND orders.created BETWEEN '".$datefrom."' AND '".$dateto."' AND order_items.product_id >= 100 group by order_items.product_id) g";
                        $result = $conn->query($sqltali1);

                        if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<script type='text/javascript'> tots4 = '£".$row['hello']."';</script>";
                            echo "<script type='text/javascript'> holla2 = '£".$row['bye']."';</script>";
                        
                        }};


    };
        ?>  

<script>
function myFunction2() {
        /*document.getElementById('wholy').innerHTML = 'Profit: ' + tots3;
        document.getElementById('wholy2').innerHTML = 'Profit: ' + tots4;
        document.getElementById('wholy3').innerHTML = 'Wholesale Price: ' + holla2;
        document.getElementById('wholy4').innerHTML = 'Wholesale Price: ' + holla;*/
}
function myFunction() {
    document.getElementById("sales").innerHTML = "SALES FROM <b>" + dating + "</b> TO <b>" + dating2 + "</b>";
}

window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title: {
        text: "Groceries"
    },
        subtitles:[
        {
            text: "Total Sales: £" + tots,
            //Uncomment properties below to see how they behave
            fontColor: "red",
            fontSize: 20,
            verticalAlign: "bottom", // "top", "center", "bottom"
            horizontalAlign: "center" // "left", "right", "center"
        }
        ],
    
    data: [{
        type: "pie",
        startAngle: 240,
        indexLabel: "{label} {y}",
        yValueFormatString: "##0\"\"",
        dataPoints: elementi
    }]
});
chart.render();
myFunction();
myFunction2();
var chart2 = new CanvasJS.Chart("chartContainer2", {
    animationEnabled: true,
    title: {
        text: "Clothes"
    },
    subtitles:[
        {
            text: "Total Sales: £" + tots2,
            //Uncomment properties below to see how they behave
            fontColor: "red",
            fontSize: 20,
            verticalAlign: "bottom", // "top", "center", "bottom"
            horizontalAlign: "center" // "left", "right", "center"
        }
        ],
    data: [{
        type: "pie",
        startAngle: 90,
        indexLabel: "{label} {y}",
        yValueFormatString: "##0\"\"",
        dataPoints: elementi2
    }]
});
chart2.render();
    
var chart3 = new CanvasJS.Chart("chartContainer3", {
    animationEnabled: true,
    theme: "light2",
    title:{
        text: "UWLMART Sales & Profit"
    },
    axisY:{
        includeZero: false
    },
    data: [
                       {        
        type: "line",
        showInLegend: true,
        legendText: "Profit",
        dataPoints: [
            { y: prof1, label: "February" },
            { y: prof2 , label: "March" }
      
        ]
      }, {
        type: "line",
        showInLegend: true,
        legendText: "Total Sales",
        dataPoints: [
            { y: totally, label: "February" },
            { y: totally2 , label: "March" }
      
        ]
      },

]
});
chart3.render();
}
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> myfunction2();</script>
<!--         <div id="inner"> -->
        <h3 style="text-align: center; background-color: darkgreen; border-radius: 5px; color: white; " class=" w3-card-4">Sales Search</h3>
            <br>
        <form action="#bottom" method="POST" style="margin: -63px 10px 0px 30px;">
            <input type="date" id="myDate" value="2018-02-01" name="datefrom" style="border-radius: 5px; border: 1px solid #ccc;">
            <input type="date" id="myDate2" value="2018-02-28" name="dateto" style="border-radius: 5px; border: 1px solid #ccc;">
            <button style="background-color: #fff; border: none; border-radius: 5px; color: darkgreen; text-align: center; display: inline-block; size: 10px; " type="submit" class="w3-card-4">Search</button>
        </form>
        
        <p><?php echo $nov; ?><p>
        <h3 id="sales" style="text-align: center; font-style: italic; font-family: serif;"><em><b></b></em></h3>
        <hr>
        <div style="display: flex; ">
                <div id="chartContainer" style=" height: 370px; width: 100%; margin-right: 100px; position: relative;"></div>
                <div id="chartContainer2" style=" height: 370px; width: 100%; position: relative;"></div>
        </div>
        <a style="text-align: right;" id="wholy"></a>
        <br/>
        <a style="text-align: right;" id="wholy2"></a>
        <br/>
        <a style="text-align: right;" id="wholy3"></a>
        <br/>
        <a style="text-align: right;" id="wholy4"></a>
                        <div id="chartContainer3" style=" height: 370px; width: 100%; position: relative;"></div>
        <a id="bottom"></a>





 

        <br>
        <br>
        <br>
<!--         </div> -->
    </div>
    <fieldset id="Groceries" class="tabcontent">
        </br>
        </br>
        </br>
        </br>
        <form class="w3-container"  action="groceriesadd.php" method="POST">
            <div class="w3-container" style="background-color: linen; border:1px dotted #515d70;">
        <h3 style="text-align: center; background-color: #515d70; border-radius: 1px; color: white; font-family: serif;">Add Groceries</h3>
            </div>
                        </br>
                <label>Brand:</label>
            <input type="text" class="w3-input" name="brand" />
                        <br />
                <label>Type & Description:</label>
            <input type="text" class="w3-input" name="type" />
                        <br />
                <label>Stock:</label>
            <input type="text" class="w3-input" name="stock" />
                        <br />
                <label>Price:</label>
            <input type="text" class="w3-input" name="price" />
                        </br>
                <label>Status: 0 or 1</label>
            <input type="text" class="w3-input" name="status" />
                        <br />
                <label>Picture:</label>
            <input type="text" class="w3-input" id="b64" name="picture" value="" />
            <input id="inp" type="file">
            <img id="img" height="150">
            <button type="submit" id="ordButton" class="fa fa-check-square-o"><strong> Add Groceries</strong></button>
            </form>


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
        </fieldset>
    <div id="Groceriesdb" class="tabcontent">
        
    
        <h3 style="text-align: center; font-family: serif;">Groceries List</h3>
        <table id="onepiece">
            <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Brand</th>
            <th>Type</th>
            <th>Stock</th>
            <th>Price</th>
            <th style="display: none;"></th>
            </tr>
            
            
         <?php
        include 'dbh.php';
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
                    echo "<script type='text/javascript'>
        var notify = [];
        var notifyl = '';
        </script>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr> <td>". $row['id']. "</td> <td> <img style='height: 40px; width: 40px; border-radius:35px;' src=". $row['picture']. "></td> <td>"
                . $row["name"]. "</td> <td>" . $row["description"] ."</td> <td>"
                . $row["stock"]. "</td> <td>" . $row["price"] ."</td> <td> <a href='deleteGroceries.php?id=".$row['id']."'>X</a>"."</td></tr>";
                           if($row["stock"] < 1){
                            // echo "Alert! " .$row['name']. " " .$row["description"] . " is Out of Stock. Please restock.";
                            echo "<div class='alert1'>
  <span class='closebtn' onclick='this.parentElement.style.display='none';'></span> 
  <strong> Alert! </strong>" .$row['name']. " " .$row["description"] . " is Out of Stock. Please restock.
</div>";
                            echo "<script type='text/javascript'> notify.push('id = ".$row["id"]." ! ".$row["name"]. " " .$row["description"]." is Out of Stock'); </script>";


                            echo "</br>";
                           }
                                if ($row["stock"] < 10 && $row["stock"] > 0)
                                {
                            echo "<div class='alert2'>
  <span class='closebtn' onclick='this.parentElement.style.display='none';'></span> 
  <strong> Warning! </strong>" .$row['name']. " " .$row["description"] . " is low on Stock. Please restock.
</div>";

                                    echo "<script type='text/javascript'> notify.push('id = ".$row['id']." ! ".$row['name']. " " .$row["description"]." is Low on Stock'); </script>";
                                    echo "</br>";
                                            
                           }
                                            
                           }
            // echo "<script type='text/javascript'> alert('Welcome to the employees page \\n---------------------------------\\n' + notify.join('\\n')); </script>";
            }
              
            else {
            echo "0 results";
        }
        
        ?>
            
        </table>
    </div>
    
    
            
    <fieldset id="Clothes" class="tabcontent">
        </br>
        </br>
        </br>
        </br>
        <form class="w3-container"  action="clothesadd.php" method="POST">
            <div class="w3-container" style="background-color: linen; border:1px dotted #515d70;">
        <h3 style="text-align: center; background-color: #515d70; border-radius: 1px; color: white; font-family: serif;">Add Clothes</h3>
            </div>
                        </br>
                <label>Brand:</label>
            <input type="text" class="w3-input" name="brand2" />
                        <br />
                <label>Type & Description:</label>
            <input type="text" class="w3-input" name="type2" />
                        <br />
                <label>Stock:</label>
            <input type="text" class="w3-input" name="stock2" />
                        <br />
                <label>Price:</label>
            <input type="text" class="w3-input" name="price2" />
                        <br />
                <label>Status: 0 or 1</label>
            <input type="text" class="w3-input" name="status2" />
                        <br />
                <label>Picture:</label>
            <input type="text" class="w3-input" id="b65" name="picture2" value="" />
            <input id="inp2" type="file">
            <img id="img2" >
            <button type="submit" id="ordButton" class="fa fa-check-square-o"><strong> Add Clothes</strong></button>
            </form>
        
                    <script type="text/javascript"> function readFile() {
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

        </fieldset>  
    <div id="Clothesdb" class="tabcontent">
        <h3 style="text-align: center; font-family: serif;">Clothes List</h3>
        <table>
            <tr>
            <th>id</th>
            <th>Image</th>
            <th>Brand</th>
            <th>Type</th>
            <th>Stock</th>
            <th>Price</th>
            <th>Delete</th>
            </tr>
            
         <?php
        include 'dbh.php';
        $sql = "SELECT * FROM products2";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
                    echo "<script type='text/javascript'>
        var notify = [];
        var notifyl = '';
        </script>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr> <td>". $row['id']. "</td> <td> <img style='height: 40px; width: 40px; border-radius:35px;' src=". $row['picture']. "></td> <td>"
                . $row["name"]. "</td> <td>" . $row["description"] ."</td> <td>"
                . $row["stock"]. "</td> <td>" . $row["price"] ."</td> <td> <a href='deleteGroceries.php?id=".$row['id']."'>X</a>"."</td></tr>";
                           if($row["stock"] < 1){
                            // echo "Alert! " .$row['name']. " " .$row["description"] . " is Out of Stock. Please restock.";
                            echo "<div class='alert1'>
  <span class='closebtn' onclick='this.parentElement.style.display='none';'></span> 
  <strong> Alert! </strong>" .$row['name']. " " .$row["description"] . " is Out of Stock. Please restock.
</div>";
                            echo "<script type='text/javascript'> notify.push('id = ".$row["id"]." ! ".$row["name"]. " " .$row["description"]." is Out of Stock'); </script>";


                            echo "</br>";
                           }
                                if ($row["stock"] < 10 && $row["stock"] > 0)
                                {
                            echo "<div class='alert2'>
  <span class='closebtn' onclick='this.parentElement.style.display='none';'></span> 
  <strong> Warning! </strong>" .$row['name']. " " .$row["description"] . " is low on Stock. Please restock.
</div>";

                                    echo "<script type='text/javascript'> notify.push('id = ".$row['id']." ! ".$row['name']. " " .$row["description"]." is Low on Stock'); </script>";
                                    echo "</br>";
                                            
                           }
                                            
                           }
            // echo "<script type='text/javascript'> alert('Welcome to the employees page \\n---------------------------------\\n' + notify.join('\\n')); </script>";
            }
              
            else {
            echo "0 results";
        }
        
        ?>
            
        </table>
            
        </table>
    </div>
    <div id="Registration" class="tabcontent">
        <div class="w3-container">
      <h3>Registration List</h3>
        <table>
            <tr>
            <th>id</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>DOB</th>
            <th>MobileNumber</th>
            <th>Email Address</th>
            <th>AddressLine</th>
            <th>City</th>
            <th>PostCode</th>
            <th>Country</th>
            <th>Delete</th>
                          <?php
        include 'dbh.php';
        $sql = "SELECT * FROM registration";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr> <td>". $row["id"]. "</td> <td>". $row["fname"]."</td> <td>"
                . $row["lname"]. "</td> <td>" . $row["dob"] ."</td> <td>"
                . $row["mnumber"]. "</td> <td>" . $row["eaddress"] ."</td> <td>"
                . $row["address1"]. "</td> <td>" . $row["address2"] ."</td> <td>"
                . $row["pcode"]. "</td> <td>" . $row["country"] ."</td> <td> <a href='deleteRegistration.php?id=".$row['id']."'>x</a>"."</td></tr>";
            }
        } else {
            echo "0 results";
        }
        
        
        ?>
        </table> 
 
      </div>
</div>
        
    <div id="Orders" class="tabcontent">
      <h3 style="text-align: center; font-family: serif;">Orders List</h3>
      <div class="w3-container">
        <table id="orderslist">
            <tr>
            <th>id</th>
            <th>customer id</th>
            <th>Total Price</th>
            <th>Created</th>
            <th>Modified</th>
            <th>Delete</th>
                          <?php
        include 'dbh.php';
        $sql = "SELECT * FROM orders";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr> <td>". $row["id"]. "</td> <td>" . $row["customer_id"] ."</td> <td>"
                . $row["total_price"]. "</td> <td>" . $row["created"] ."</td> <td>"
                . $row["modified"]."</td> <td> <a href='deleteOrders.php?id=".$row['id']."'>x</a>"."</td></tr>";
            }
        } else {
            echo "0 results";
        }
        
        
        ?>
        </table>    
 
      </div>
</div>
    <div id="OrderItems" class="tabcontent">
      <h3 style="text-align: center; font-family: serif;">Order Items List</h3>
      <div class="w3-container">
        <table id="registrationlist">
            <tr>
            <th>id</th>
            <th>Order id</th>
            <th>Product id</th>
            <th>Quantity</th>
            <th>Delete</th>
                          <?php
        include 'dbh.php';
        $sql = "SELECT * FROM order_items";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr> <td>". $row["id"]. "</td> <td>"
                . $row["order_id"]. "</td> <td>" . $row["product_id"] ."</td> <td>"
                . $row["quantity"]. "</td> <td> <a href='deleteOrderitems.php?id=".$row['id']."'>x</a>"."</td></tr>";
            }
        } else {
            echo "0 results";
        }
        
        
        ?>
        </table>    
 
      </div>
</div>
      
    <fieldset id="Restock" class="tabcontent">
        </br>
        </br>
        </br>
        </br>
        
                <form class="w3-container"  action="restock.php" method="POST">
            <div class="w3-container" style="background-color: linen; border:1px dotted #515d70;">
        <h3 style="text-align: center; background-color: #515d70; border-radius: 1px; color: white; font-family: serif;">RESTOCK</h3>
            </div>
                        </br>
                <label>Item Id</label>
            <input type="text" class="w3-input" name="itemid" />
                        <br />
                <label>Add Amount</label>
            <input type="text" class="w3-input" name="addamount" />
                        <br />
            <button type="submit" id="ordButton" class="fa fa-check-square-o"><strong> RESTOCK</strong></button>
            </form>   
    </fieldset>
      






</div>
       

</body>

    </header>
</html>
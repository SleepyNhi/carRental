<?php 
session_start(); ?>
<?php 
if(isset($_COOKIE['user'])){
   $customerID = "<a href='customerInfo.php'> Welcome".$_COOKIE['user']." </a>";
   $customerID2 = "<a href='logout.php'> logout </a>";
   echo $customerID2;
   

} else {
    $customerID = "<a href='login.php'> Login </a>";

}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <style>
            
        </style>
    </head>
    <body>
        <div id="loginHeader"><marquee><p>Until the end of July 25% OFF SUVs.  Free Rides on first booking. Hurry Now</p></marquee><?php echo $customerID?></div>

            <div class="menu">
                <ul>
                    <li id="active"><a href="index.php">Home</a></li>
                    <li><a href="cars.php">Cars</a></li>
                    <li><a href="book.php">Book Car</a></li>
                    <li><a href="park.php">Parking</a></li>
                    <li><a href="flight.php">Book Flight</a></li>
                    <li><a href="shoppingcart.php">Shopping Cart</a></li>
                </ul>
            </div>
    </body>
</html>

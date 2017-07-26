<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include 'nav_tab.php';
        ?>
        
        
        <?php 
        
        $database_host = "localhost";
	$database_user = "root";
	$database_pass = "greenmonster1";
	$database_name = "cars";
	$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
	if(mysqli_connect_errno()){
		die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }

        
                $dailyrate =$_POST['dailyrate'];
                $weeklyrate =$_POST['weeklyrate'];
                echo $dailyrate.$weeklyrate;

        mysqli_query($connection,$result) or die(mysqli_error($connection));
        ?>
    </body>
</html>

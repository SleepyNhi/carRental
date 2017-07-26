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
        <style>
            form {
                font-size: 20px;
                margin: auto;
            }
            .bookbody {
                width: 700px;
                margin: auto;
                margin-top: 100px;
                
            }
        </style>
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
                
        
        $res="SELECT * FROM carsdata";
	$result=mysqli_query($connection,$res);
                
	?>
        <div  class="bookbody">
        <form class="bookform">
        <?php
         if (mysqli_num_rows($result) > 0) 
         { while( $row = mysqli_fetch_assoc( $result ) ){
            echo "<input type="."checkbox   ".">"."&nbsp;&nbsp;". $row["License_no"]."&nbsp;&nbsp;";
            echo $row["Model"]."&nbsp;";
            echo "Model year: &nbsp;".$row["CYear"]."&nbsp;";
            echo "Daily rate: &nbsp;".$row["Drate"]."&nbsp;";
            echo "Weekly rate: &nbsp;".$row["Wrate"]. "<br><br>";
            }
         }
         
         
        ?>
            
            <input type="submit">
        </form>
        </div>
    </body>
</html>
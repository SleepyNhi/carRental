<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
<body>
<?php include 'nav_tab.php'; ?>
    
<?php
	$database_host = "localhost";
	$database_user = "root";
	$database_pass = "greenmonster1";
	$database_name = "cars";
	$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
	if(mysqli_connect_errno()){
		die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }
	$Ctype=$_POST["Ctype"];
        $Drate=$_POST["udrate"];
        $Wrate=$_POST["uwrate"];
			
            $res="UPDATE carsdata SET Drate ='$Drate', Wrate='$Wrate' WHERE Ctype='$Ctype'";
                        
	$result=mysqli_query($connection,$res);
	echo "<h1><center><br>".$Ctype."&nbsp;Cars</h1><br><br>";
        echo "Rate updated!";
?>
<center>


</body>
</html>



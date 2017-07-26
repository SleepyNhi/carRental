<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
<body>
<?php
	$database_host = "localhost";
	$database_user = "root";
	$database_pass = "greenmonster1";
	$database_name = "cars";
	$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
	if(mysqli_connect_errno()){
		die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }
	
$License_no=$_POST["lno"];
$Model=$_POST["model"];
$Year=$_POST["year"];
$Ctype=$_POST["Cartype"];
$Name1=$_POST["Carown"];

$Ssn=$_POST["uid"];
$Bid=$_POST["uid"];
$Compid=$_POST["uid"];
$Name=$_POST["oname"];
$Bname=$_POST["oname"];
$Cname=$_POST["oname"];
$City=$_POST["city"];



	if($Name1=="Individual") {
	$result="INSERT INTO carsdata(License_no,Model,CYear,Ctype,Carown,Ssn,Name,City) VALUES('$License_no','$Model','$Year','$Ctype','$Name1','$Ssn','$Name','$City')";
	}
	else if($Name1=="Bank") {
	$result="INSERT INTO carsdata(License_no,Model,CYear,Ctype,Carown,Bid,Bname,City) VALUES('$License_no','$Model','$Year','$Ctype','$Name1','$Bid','$Bname','$City')";	
	}
	else {
	$result="INSERT INTO carsdata(License_no,Model,CYear,Ctype,Carown,Compid,Cname,City) VALUES('$License_no','$Model','$Year','$Ctype','$Name1','$Compid','$Cname','$City')";	
	}
	mysqli_query($connection,$result) or die(mysqli_error($connection));
	echo "<h3>New car has been successfully added</h3>";
?>

</body>
</html>

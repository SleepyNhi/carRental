<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
<body>
<?php include 'navigation_tab.html'; ?>
    
<?php
	$database_host = "localhost";
	$database_user = "root";
	$database_pass = "greenmonster1";
	$database_name = "cars";
	$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
	if(mysqli_connect_errno()){
		die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }
	$Ctype=$_POST["Ctype"];
			
			$res="SELECT * FROM carsdata WHERE Ctype='$Ctype'";
	$result=mysqli_query($connection,$res);
	echo "<h1><center><br>".$Ctype."&nbsp;Cars</h1><br><br>";
?>
<center>
<table border='1'>
<tr>
<th>License No</th>
<th>Model</th>
<th>Year</th>
<th>Daily Rate</th>
<th>Weekly Rate</th>
</tr>
<?php
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>" . $row["License_no"] . "</td>";
echo "<td>" . $row["Model"] . "</td>";
echo "<td>" . $row["CYear"] . "</td>";
echo "<td>" . $row["Drate"] . "</td>";
echo "<td>" . $row["Wrate"] . "</td>";
echo "</tr>";
}
}
?>
</table>
</body>
</html>



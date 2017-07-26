
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

include 'nav_tab.php';
// define variables and set to empty values
$userpermission = "guest";
$nameErr = $passErr = $ageErr = $phoneErr = "";
$name = $password = $age = $phonenum = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
   if (empty($_POST["password"])) {
    $passErr = "password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
    

  if (empty($_POST["age"])) {
    $ageErr = "age is required";
  } else {
    $age = test_input($_POST["age"]);
  }
    
  if (empty($_POST["phonenum"])) {
    $phoneErr = "Invalid phone";
  } else {
    $phonenum = test_input($_POST["phonenum"]);

  }

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Welcome to Rent-A-Ride! Please Login here.</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Password: <input type="text" name="password" value="<?php echo $password;?>">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>
  Phone Number: <input type="text" name="phonenum" value="<?php echo $phonenum;?>">
  <span class="error"><?php echo $phoneErr;?></span>
  <br><br>
  Age: <input type="text" name="age" value="<?php echo $age;?>">
  <span class="error"><?php echo $ageErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $password;
echo "<br>";
echo $phonenum;
echo "<br>";
echo $age;


?>

<?php
	$database_host = "localhost";
	$database_user = "root";
	$database_pass = "greenmonster1";
	$database_name = "cars";
	$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
	if(mysqli_connect_errno()){
		die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }

        
        $result="INSERT INTO users(user_permission,username,password,age,phonenum) VALUES('$userpermission','$name','$password','$age','$phonenum')";
        mysqli_query($connection,$result) or die(mysqli_error($connection));

        echo 'Added User!';
?>

</body>
</html>




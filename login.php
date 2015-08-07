<!DOCTYPE HTML>
<html lang="en">
<head>
<title> Register/Login System </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />

<meta name="keywords" content="login,register,php,mysql" />
<meta name="description" content="Login/Registration System" />

<style>

html{

font-size: 12px;

}

p{

text-align: center;

}

input[name='submit']{

background: green;
color: gold;
border: 3px outset gold;

}

</style>

</head>

<body>

<p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>

<form action="" method="POST">

<h3> LOGIN </h3>

<label for="user">Username: </label><input name="user" type="text" maxlength="50" size="20" required /><br /><br />

<label for="pass">Password: </label><input name="pass" type="password" maxlength="50" size="20" required /><br /><br />

<input name="submit" type="submit" value="LOGIN" />

</form>

<?php

require 'dbConnect.php';

if(isset($_POST['submit'])){

  $user = $_POST['user'];
  $pass = $_POST['pass'];
  
  $con = mysql_connect(DATABASE_HOST,DATABASE_USERNAME,DATABASE_PASSWORD) or die("Cannot connect to DB.");
  
  $sql = mysql_query("SELECT * FROM userPassRegister WHERE userName = '".$user."' AND passWord='".$pass."'");
  
  $numrows = mysql_num_rows($sql);
  
  if($numrows!= 0){
  
    while($row = mysql_fetch_assoc($sql)){
	
	  $dbusername = $row['userName'];
	  $dbpassword = $row['passWord'];
	
	}
	
	if($user == $dbusername  && $pass == $dbpassword){
	
	  session_start();
	  $_SESSION['session_user']=$user;
	  
	  header("Location: member.php");
	
	 }

    }else{
   
      echo "Invalid username or password.";     
    
    }	
  
  }

?>


</body>

</html>
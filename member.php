<?php

session_start();
if(!isset($_SESSION['session_user'])){

header("Location: login.php");

}else{

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title> Member Page </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />

<meta name="keywords" content="login,register,php,mysql" />
<meta name="description" content="Login/Registration System" />

</head>

<body>

<h2> Welcome, <?php echo $_SESSION['session_user']; ?>! <br /><a href="logout.php">Logout</a></h2>

<p> blahofiufuwjfuiaifuhauifaflhufawfoiajoi<br />

bweihdwefiuwhifhoawhfuhwafiuwfiuawfiuwajejfoiawj<br />

wfeiuawfiuowufiwuagfuyahwufyhyuawheoiauhgifuawfhiaw<br />

wfihawfhahufhaiyuauygruyahrfiauefhaiurhfiuahfiuahuefh<br />

</p>

</body>

</html>

<?php
 
 }

?>

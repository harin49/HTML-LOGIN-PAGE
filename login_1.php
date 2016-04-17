<?php

session_start();
require('connect.php');
if(isset($_POST['username']) and isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

$query = "SELECT * FROM 'sample_login' WHERE username='$username' AND password='$password'";
$result = mysqli_query($query) or die(mysqli_error());
$count = mysql_num_rows($result);
if($count==1)
{
	$_SESSION['username'] = $username;
}
else
{
	echo "invalid login details";
}
}
if(isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
	echo "hello".$username ."";
 }



?>
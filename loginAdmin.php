<?php
require 'connect.php';
session_start(); 
$error=''; 
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];

$connection = $conn2;
// To protect MySQL injection for Security purpose
/*$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);*/
// Selecting Database
$db = mysqli_select_db( $connection, "parceldeliverynew");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query( $connection ,"select * from admin where password='$password' AND username='$username'");//This query need to be edited.
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session

header("location: adminHome.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($connection); // Closing Connection
}
}
?>


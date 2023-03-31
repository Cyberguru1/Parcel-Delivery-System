<?php
require 'connect.php';

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = $conn2;
// Selecting Database;
$db = mysqli_select_db($con, "parceldeliverynew");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($con, "select username from admin where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(isset($login_sesssion)){
mysqli_close($connection); // Closing Connection
header('Location: adminHome.php'); // Redirecting To Home Page
}
?>

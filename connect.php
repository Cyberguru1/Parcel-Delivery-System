<?php //This will establish the connection with the database.
$db_name = "parceldeliverynew";
$mysql_username = "root";
$mysql_password = "root";
$server_name = "localhost";
$con = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
$conn2 = mysqli_connect($server_name, $mysql_username, $mysql_password);
if($con){
//echo "DB connection success!";
}

else
echo "Connection failed!";

?>

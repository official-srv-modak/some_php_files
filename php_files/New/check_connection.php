<?php 
// this php script is for connecting with database 
// data have to fetched from local server 
$mysql_host = 'localhost'; 
  
// user name is root 
$mysql_user = 'root'; 
$password = $_POST["password"];
// function to connect with database having  
// argument host and user name 
$conn = mysqli_connect($mysql_host, $mysql_user, $password);
if (!@$conn) 
{ 
    die('Cannot connect to database'); 
} 
else
{ 
// database name is server 
if (mysqli_select_db($conn,'verified')) 
    { 
        echo "Connection Success"; 
    } 
    else
    { 
        die('Cannot connect to database'); 
    } 
} 
?>
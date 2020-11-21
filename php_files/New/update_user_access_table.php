<?php

$mysql_host = 'localhost'; 
  
// user name is root 
$mysql_user = 'root'; 
$password = $_POST["password"];
$usernames = $_POST["usernames"];
$conn = mysqli_connect($mysql_host, $mysql_user, $password);
if (!@$conn) 
{ 
    die('Cannot connect to database'); 
} 
else
{ 
    // database name is auto_tut_user_inf
    if (!mysqli_select_db($conn,'verified')) 
    {
        die('Cannot connect to database'); 
    } 
} 

  $sql = "INSERT INTO access_history(usernames) VALUES(\"" . $usernames . "\")";
  if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully.";
  } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }

$conn->close();



?>
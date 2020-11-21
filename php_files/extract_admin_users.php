<?php

$mysql_host = 'localhost'; 
  
// user name is root 
$mysql_user = 'root'; 
$password = $_POST["password"];
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


  $sql = "SELECT * FROM verified.admin_users";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo $row["user_email_id"] . "\xA";
    }
  } else {
    echo "0 results";
  }
  $conn->close();



?>
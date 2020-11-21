<?php

$mysql_host = 'localhost'; 
  
// user name is root 
$mysql_user = 'root'; 
$db_password = $_POST["db_password"];
$user_id = $_POST["user_id"];
$username = $_POST["username"];
$user_password = $_POST["user_password"];

$conn = mysqli_connect($mysql_host, $mysql_user, $db_password);
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

$sql = "SELECT * FROM verified.user_info WHERE user_id = " . $user_id;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if ($row["user_name"] == $username && $row["password"] == $user_password)
    {
        $sql = "SELECT local_news FROM verified.user_info WHERE user_id = " . $user_id;
        $local_news_result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while($local_news_row = $local_news_result->fetch_assoc()) {
            echo $row["local_news"] . "\xA";
          }
        }else {
          echo "0 results";
        }
    }
  }
} 
else 
{
    echo "0 results";
}
  
$conn->close();

?>
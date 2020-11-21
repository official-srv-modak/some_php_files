<?php
$mysql_host = "localhost";
$mysql_user = "root";
$dbname = "auto_tut_user_info";
$tablename = "user_info";

// Create connection
$conn = mysqli_connect($mysql_host, $mysql_user);
// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
$password = $_POST["password"];
if($password = "sourav")
{
  $employee_id = $_POST["employee_id"];
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $teams = $_POST["teams"];



  $sql = "INSERT INTO ".$dbname.".".$tablename." (employee_id, first_name, last_name, email, team)
  VALUES ('".$employee_id."', '".$first_name."', '".$last_name."', '".$email."', '".$teams."')";

  if ($conn->query($sql) === TRUE) {
    echo "true";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
}


?>
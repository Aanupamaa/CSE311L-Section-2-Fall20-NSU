<?php
$serverName = "localhost";
$userName = "root";
$password= "";
$dbName = "final_exam_cse311L_sec2_fall2020";
$mysqli_connection = new MySQLi($serverName,$userName,$password,$dbName);

if ($mysqli_connection->connect_error) {
   echo "Not connected, error: " . $mysqli_connection->connect_error;
}
else {
   echo "Connected.";
}
?>
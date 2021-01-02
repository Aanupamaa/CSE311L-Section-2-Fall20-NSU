<?php
$serverName = "localhost";
$userName = "root";
$password= "";
$dbName = "final_exam_cse311L_sec2_fall2020";

$link=mysqli_connect($serverName,$userName,$password);

if($link===false){
    die("connection error" .mysqli_connect_error());
}

$sql="CREATE DATABASE $dbName";

if(mysqli_query($link,$sql)){
echo"database created successfully";
}
else{
    "Error $sql". mysqli_connect_error($link);
}

mysqli_close($link);
?>
<?php
$link = mysqli_connect("localhost", "root", "", "final_exam_cse311L_sec2_fall2020");

if($link===false){
    die("connection error" .mysqli_connect_error());
}
 
$sql = "CREATE TABLE suppliers(
	sid int(9) primary key,
	sname varchar(30),
	address varchar(40)
	)";

if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

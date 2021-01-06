<?php
$link = mysqli_connect("localhost", "root", "", "final_exam_cse311L_sec2_fall2020");

if($link===false){
    die("connection error" .mysqli_connect_error());
}
 
$sql = "CREATE TABLE catalog(
	sid int(9),
	pid int(9),
	cost int(10),
	primary key(sid,pid),
	foreign key(sid) references suppliers(sid),
	foreign key(pid) references parts(pid))";

if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

<?php
/*$serverName = "localhost";
$userName = "root";
$password= "";
$dbName = "final_exam_cse311L_sec2_fall2020";

$link=mysqli_connect($serverName,$userName,$password,$dbName); */
$link = mysqli_connect("localhost", "root", "", "final_exam_cse311L_sec2_fall2020");

if($link===false){
    die("connection error" .mysqli_connect_error());
}
 
$sql = "CREATE TABLE class( name varchar(40) primary key NOT NULL,
    meets_at varchar(20),
    room varchar(10),
    fid numeric(9,0),
    foreign key (fid) references faculty(fid)
    )";

if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
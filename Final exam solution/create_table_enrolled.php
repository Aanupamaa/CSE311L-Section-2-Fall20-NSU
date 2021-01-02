<?php
$link = mysqli_connect("localhost", "root", "", "final_exam_cse311L_sec2_fall2020");

if($link===false){
    die("connection error" .mysqli_connect_error());
}
 
$sql = "CREATE TABLE enrolled(
    snum numeric(9,0),
    cname varchar(40),
    primary key(snum,cname),
    foreign key (snum) references
    student(snum),
    foreign key (cname) references
    class(name)
    )";

if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

<?php
include 'connection_check.php';

$sql= "SELECT s.sname FROM student s JOIN enrolled e ON (s.snum=e.snum) JOIN 
class c ON (e.cname=c.name) JOIN faculty f ON (c.fid=f.fid) WHERE s.major LIKE '%History%' 
AND f.fname LIKE 'Ivana Teach'";

$result = mysqli_query($mysqli_connection, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
         level: '.$row['sname'];
    }
} 
else {
    echo '0 results';
}
mysqli_close($mysqli_connection);
?>
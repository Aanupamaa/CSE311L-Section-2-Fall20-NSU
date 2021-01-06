<?php
include 'connection_check.php';

$sql= "SELECT DISTINCT s.sid FROM suppliers s JOIN catalog c ON(s.sid=c.sid) JOIN parts p 
ON (p.pid=c.pid) WHERE p.color ='Red'";

$result = mysqli_query($mysqli_connection, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '
         level: '.$row['sid'];

    }
} 
else {
    echo '0 results';
}
mysqli_close($mysqli_connection);
?>
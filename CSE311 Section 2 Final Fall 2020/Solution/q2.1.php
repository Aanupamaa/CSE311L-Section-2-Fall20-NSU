<?php
include 'connection_check.php';

$sql= "SELECT DISTINCT s.sname FROM suppliers s JOIN catalog c
 ON(s.sid=c.sid) WHERE c.pid= ALL( SELECT p.pid FROM parts p)";

$result = mysqli_query($mysqli_connection, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
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
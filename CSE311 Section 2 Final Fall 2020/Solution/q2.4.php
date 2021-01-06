<?php
include 'connection_check.php';

$sql= "SELECT s.sname FROM suppliers s JOIN catalog c ON(s.sid=c.sid) WHERE c.pid IN
 (SELECT p.pid from parts p WHERE p.color LIKE 'Green' AND p.color LIKE 'Red')";

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
<?php
include 'connection_check.php';

$sql= "SELECT s.sname FROM student s WHERE s.snum IN 
(SELECT e.snum FROM enrolled e GROUP BY e.snum HAVING COUNT(*)>= ALL(SELECT COUNT(*) 
FROM enrolled e1 GROUP by e1.snum))";

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
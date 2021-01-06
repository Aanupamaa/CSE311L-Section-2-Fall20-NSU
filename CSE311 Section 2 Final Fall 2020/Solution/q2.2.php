<?php
include 'connection_check.php';

$sql="SELECT p.pname FROM parts p WHERE p.pid IN 
(SELECT c.pid FROM catalog c WHERE c.sid IN (SELECT s.sid FROM suppliers s WHERE s.sname 
like '%Acme Widget%'))" ;

$result = mysqli_query($mysqli_connection, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '
         level: '.$row['pname'];

    }
} 
else {
    echo '0 results';
}
mysqli_close($mysqli_connection);
?>
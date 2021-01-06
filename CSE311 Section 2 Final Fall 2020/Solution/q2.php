<?php
include 'connection_check.php';

$sql= 'SELECT DISTINCT s.sname from student s join enrolled e
  on (s.snum=e.snum) JOIN class c on (e.cname=c.name) JOIN faculty f 
  ON(c.fid=f.fid) where s.level like "%JR%" AND f.fname LIKE "Ivana Teach"';

$result = mysqli_query($mysqli_connection, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '
         level: '.$row['sname'];
      //'  -  Avg(age):'.$row['count(*)'];
    }
} 
else {
    echo '0 results';
}
mysqli_close($mysqli_connection);
?>
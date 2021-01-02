<?php
include 'connection_check.php';
 $sql = "SELECT First_Name, Last_Name,MIN(Salary),MAX(Salary),SUM(Salary),AVG(Salary) FROM employees GROUP BY Job_Id;"

 if (mysqli_query($link, $sql)) {
    echo 'Records inserted successfully.';
} else {
    echo "ERROR: Could not able to execute $sql. ".mysqli_error($link);
}

mysqli_close($link);
?>
<?php

$link = mysqli_connect('localhost', 'root', '', 'final_exam_cse311L_sec2_fall2020');

if ($link === false) {
    die('ERROR: Could not connect. '.mysqli_connect_error());
}

$sql = "INSERT INTO enrolled (snum,cname) values
(112348546,'Database Systems'),
(115987938,'Database Systems'),
(348121549,'Database Systems'),
(322654189,'Database Systems'),
(552455318,'Database Systems'),
(455798411,'Operating System Design'),
(552455318,'Operating System Design'),
(567354612,'Operating System Design'),
(112348546,'Operating System Design'),
(115987938,'Operating System Design'),
(322654189,'Operating System Design'),
(567354612,'Data Structures'),
(552455318,'Communication Networks'),
(455798411,'Optical Electronics'),
(301221823,'Perception'),
(301221823,'Social Cognition'),
(301221823,'American Political Parties'),
(556784565,'Air Quality Engineering'),
(099354543,'Patent Law'),
(574489456,'Urban Economics')
";

if (mysqli_query($link, $sql)) {
    echo 'Records inserted successfully.';
} else {
    echo "ERROR: Could not able to execute $sql. ".mysqli_error($link);
}

mysqli_close($link);
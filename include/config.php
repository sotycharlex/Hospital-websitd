<?php
define('DB_SERVER','us-cdbr-east-04.cleardb.com');
define('DB_USER','bfc1bc96a6bd22');
define('DB_PASS' ,'e3f0bee3');
define('DB_NAME', 'hms');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
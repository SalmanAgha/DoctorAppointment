<?php
 
include 'env.php';

    $host = getenv("DBHost");
    $user = getenv("DBUsername");
    $pass = getenv("DBPassword");
    $database = getenv("DBDatabase");

    $connect = mysqli_connect($host, $user, $pass, $database) OR DIE("Please contact System Administrator to report this issue");

 
?>
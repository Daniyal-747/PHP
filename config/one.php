<?php

// http://localhost:82/phpmyadmin/

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "g1";           // Provide the database name that you have created on local host database

$conn = new mysqli($serverName, $userName, $password, $dbName);

if($conn){
    echo "<br> Connection Successful!";
}
else{
    echo "<br> Connection Failed!";
}

?>
<?php

include("../config/one.php");

$Id = $_GET['id'];
$sql = "SELECT * FROM `product` where category = $Id";
$result= mysqli_query($conn , $sql);

while($opt = mysqli_fetch_assoc(($result))){

    echo $opt['name'];
}


?>
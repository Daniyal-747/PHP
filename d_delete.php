<?php

include("config/one.php");

$ID = $_GET['id'];
$sql = "delete from users where id = $ID";
$result = mysqli_query($conn , $sql);

if($result == true){
    echo "<br> Your record has been updated";
}
else{
    echo "<br> No record updated";
}

?>
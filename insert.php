<?php

$data = $_POST['value'];
$tblName = strtolower($_POST['names']);
include "config.php";
$sql = "INSERT INTO $tblName(message) VALUES ('{$data}')";

if(mysqli_query($conn,$sql)){
    echo 1;
}else{
    echo 0;
}
?>
<?php
include "config.php";

    $sndId = $_POST['sndId'];
    $text = $_POST["text"];

$sql = "INSERT INTO `messages`(`sender_id`, `receiver_id`, `text`) VALUES ($sndId, 0,$text)";
if(mysqli_query($conn,$sql)){
    echo 1;
}else{ 
    echo 0;
}

?>
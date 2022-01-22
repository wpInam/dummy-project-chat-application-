<?php
include 'config.php';

$sql = "SELECT * FROM user";
$result = mysqli_query($conn,$sql) or die('Sql command failed.');

$div ='';
    while($row = mysqli_fetch_assoc($result)){
        $div .= "<div>".$row['name']."</div>";
    }

echo $div;
?>
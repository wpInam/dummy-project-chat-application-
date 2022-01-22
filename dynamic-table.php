<?php
$name = $_POST[''];

$conn = mysqli_connect('localhost','root','','chatapplication') or die('connection Failed');

$sql ="SELECT * FROM $name;";
$sql .= "SELECT * FROM user";
$result = mysqli_multi_query($conn,$sql) or die("Query Failed.");













mysqli_close($conn);

?>
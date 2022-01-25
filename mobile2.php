<?php
include 'config.php';

$id = $_POST['id'];
$sql = "SELECT * FROM messages WHERE sender_id = {$id} && receiver_id=0";
$result = mysqli_query($conn,$sql) or die("Query Failed mobile2.php");

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<div class='blu'> $row[text] </div>";
    }

}else{
  
}
?>
<?php
include 'config.php';

if(isset($_POST['names'])){
    $table = strtolower($_POST['names']);
  }else{
    $table = 'zero';
  }

$sql = "SELECT * FROM {$table}";
$result = mysqli_query($conn,$sql) or die("Query Failed mobile2.php");

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<div class='blu'> $row[message] </div>";
    }

}else{
    if($table == 'zero'){
        echo "";
    }else{
    echo "<div 
        style='background:rgb(245, 128, 128);
        color: white;
        width: fit-content;
        min-height:2rem;
        margin: .5rem;
        padding: .5rem;
        border-radius: .5rem;
        '>You don't have any message yet</div>";
    }
    
}
mysqli_close($conn);
?>
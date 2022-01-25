<?php

include 'config.php';
    if(isset($_POST['id'])){
        $id =$_POST['id']; 
    }else{
        $id = 1;
    }

$sql = "SELECT * FROM user WHERE id = $id";
$result = mysqli_query($conn,$sql) or die('Query Failed profilePic.php');

while($row = mysqli_fetch_assoc($result)){
    echo '<div class="group">
    <a href=""><img src="image/'.$row['img'].'" alt=""></a>
     <div class="text">
        <a href="" data-id='.$row['id'].' data-name='.$row['name'].'>
            <p id=name>'.$row['name'].'</p>
            <p>'. date("d/F/Y").'</p>
        </a>    
    </div>
</div>';
}

?>
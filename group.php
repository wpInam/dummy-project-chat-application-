<?php
include 'config.php';
#$name = $_POST['name'];
$sql = "SELECT * FROM user";

$result = mysqli_query($conn, $sql) or die('Query Failed .group');
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<div class="group">
        <a href="" data-id='.$row['id'].' data-name='.$row['name'].' ><img src=image/'.$row['img'].' alt="profile"></a>
        <div class="text">
            <a href="" data-id='.$row['id'].' data-name='.$row['name'].'>
                <p>'.$row['name'].'</p>
                <p>'.$row['message'].'</p>
            </a>    
        </div>
    </div><br>';
}
}
?>
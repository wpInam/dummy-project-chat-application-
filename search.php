<?php
include 'config.php';
$search = mysqli_real_escape_string($conn,$_POST['search']);
$sql = "SELECT * FROM user WHERE name LIKE '%{$search}%' OR message LIKE '%{$search}%'";

$result = mysqli_query($conn, $sql) or die('Query Failed .search');
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<div class="group">
        <a href=?'.$row['name'].'><img src=image/'.$row['img'].' alt="profile"></a>
        <div class="text">
            <a href=?'.$row['name'].'>
                <p>'.$row['name'].'</p>
                <p>'.$row['message'].'</p>
            </a>    
        </div>
    </div><br>';
}
}
?>
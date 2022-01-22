<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://kit.fontawesome.com/897a95d990.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="parent">
        <div class="mobile mobile1">
            <h3>Messages</h3>
            <form action="">
            <input class="input" type="search" placeholder="search">
            <input class="input2" type="submit" value="Search" name="" id="">
        </form>
            <br>
            <button><a href="#">All</a></button>
            <button><a href="#">online</a></button>
            <hr>
            <!-----Gorup for the persons-->
            <div class="group-main">                
                <div class="group">
                    <a href="#"><img src="image/a1.jpg" alt=""></a>
                    <div class="text">
                        <a href="#">
                            <p>Name of The Person</p>
                            <p>This is the summlo Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, ipsam! Beatae, soluta maxime. Autem nostrum fuga omnis voluptates! Laudantium suscipit rerum natus itaque distinctio optio consequatur et reiciendis? Esse, cum? ary of the Messages</p>
                        </a>    
                    </div>
                </div><br>    
               <?php ?>            
            </div>
            <footer>
                <nav>
                    <ul>
                        <i class="fas fa-home"><a href="#"></a></i>
                        <i class="fas fa-envelope"><a href="#"></a></i>
                        <i class="fas fa-cogs"><a href="#"></a></i>
                    </ul>
                </nav>
            </footer>
        </div>
        <div class="mobile mobile2">
           <div class="navigation">
                <a href="#"><i class="fas fa-chevron-left"></i></a>
                <div class="group">
                    <a href="#"><img src="image/a1.jpg" alt=""></a>
                    <div class="text">
                        <p>Person Name</p>
                        <p>Online</p>
                    </div>
                </div>
                <a href="#"><i class="fas fa-phone"></i></a>
                <a href="#"><i class="fas fa-video"></i></a>
            </div>
            <hr>
                       <!--------------Header Section end Mobile Screen '2'-------------->
            <div class="messages">
                <div class="messHub"></div>                
                <form id='form1' action="">
                    <input type="text">
                    <img src="image/arrow-right.png" alt="">
                    <input class="icon-rtl" type="submit" value="">
                </form>
            </div>
            <footer>
                <nav>
                    <ul>
                        <i class="fas fa-home"><a href="#"></a></i>
                        <i class="fas fa-envelope"><a href="#"></a></i>
                        <i class="fas fa-cogs"><a href="#"></a></i>
                    </ul>
                </nav>
            </footer>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script>
        $(document).ready(function(){

        })
    </script>
</body>
</html>
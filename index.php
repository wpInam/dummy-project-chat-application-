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
                <input class="input" type="search" id='search' name="search" placeholder="search">
                <input class="input2" type="submit" value="Search" id='save' name="" id="">
            </form>
            <br>
            <button id='all'><a href="#" id='all'>All</a></button>
            <button><a href="#">online</a></button>
            <hr>
            <!-----Gorup for the persons-->
            <div class="group-main naming">

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
                <div id="profile">

                </div>
                <span class=""></span>
                <a href="#"><i class="fas fa-phone"></i></a>
                <a href="#"><i class="fas fa-video"></i></a>
            </div>
            <hr>
            <!--------------/ Header Section end Mobile Screen '2'-------------->
            <div class="messages">
                <div class="messHub"></div>
                <form id='form1' action="">
                    <input type="text" id='sndMes'>
                    <img src="image/arrow-right.png" alt="">
                    <input class="icon-rtl" type="button" id="send" value="">
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
        $(document).ready(function() {

            /*********************** Variables ************************/
            /*********************** Css ************************/
            $('.group-main').css({
                "min-height": '450px'
            });
            /*********************** Load records ************************/
            function loadTable() {
                $.ajax({
                    url: 'group.php',
                    type: 'POST',
                    success: function(data) {
                        $('.group-main').html(data);
                    }
                })
            }
            loadTable();

            /*********************** Search records Button ************************/
            $(document).on('click mouseover', 'button', function(e) {
                e.preventDefault();
                $('#all').on('click', function() {
                    $('.messHub').val("");
                    $('#search').val("");
                    $('.group-main').html(loadTable());
                })
            })
            /*********************** Search records ************************/
            $('#search').on('keyup', function(e) {
                e.preventDefault();
                var search_term = $(this).val();

                $.ajax({
                    url: 'search.php',
                    type: 'POST',
                    data: {
                        search: search_term
                    },
                    success: function(data) {
                        $('.group-main').html(data);
                    }
                })
            });
            /*********************** Mobile 2 ************************/
            $(document).on('click', 'a', function(e) {
                e.preventDefault();

                var clas = $(this).data("name");
                $("span").removeClass().addClass(clas);
                var id = $(this).data("id");

                $.ajax({ // For profile picture
                    url: 'profilePic.php',
                    type: 'POST',
                    data: {
                        id: id,
                    },
                    success: function(data) {
                        $('#profile').html(data);
                    }
                })

                function showMess() {
                    $.ajax({ //for show messages
                        url: 'mobile2.php',
                        type: 'POST',
                        data: {
                            names: clas
                        },
                        success: function(data) {
                            $('.messHub').html(data);
                        }
                    });
                }
                showMess();                

            })
            /******************************************* */
            $(document).on("click","",function(e){
                e.preventDefault();
                var value = $(this).val();
                var tblName = $("span").attr('class');
              
                $.ajax({
                    url: "insert.php",
                    type: 'POST',
                    data: {value: value, names: tblName},
                        success: function(){
                            
                        }
                    })
                
            })
        })
    </script>
</body>

</html>
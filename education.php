<?php
include "header2.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>App advice</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <!--

TemplateMo 574 Mexant

https://templatemo.com/tm-574-mexant

-->
</head>

<body>

<?php
include "db_connect.php";
$query=mysqli_query($conn,"SELECT * FROM game WHERE genre=3");
while($res=mysqli_fetch_assoc($query)){
    ?>
    

    <section class="testimonials2" id="testimonials2">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 offset-lg-1">
                    <div class="owl-testimonials2 owl-carousel" style="position: relative; z-index: 5;">

                        <div class="item">
                            <i class="fas fa-puzzle-piece"></i>
                            <p><?=$res['age']?></p>
                            <div class="right-image">

                                <h4><a href="game-detail-view.php?id=<?=$res['ID']?>"><?=$res['name']?></a></h4>
                                <div class="right-image">
                                    <a href="game-detail-view.php?id=<?=$res['ID']?>" class="logo">
                                        <img src="assets/images/<?=$res['photo']?>" alt="">
                                    </a>
                                </div>
								<!-- <p align="right">
                                  <input type="button" value="Edit" />
                                </p> -->
								<?php
                                if(isset($_SESSION['id'])){
                                    ?>
                                    <p align="right">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"    data-target="#exampleModal<?=$res['ID']?>" data-whatever="@mdo">Edit
                                    </button>                                    
                                    </p>
                                    <p align="right">
                                       <a href="delete_entry.php?id=<?=$res['ID']?>&place=education">
                                       <button type="button" class="btn btn-danger">delete
                                        </button>  
                                       </a>                                  
                                    </p>
                                    <?php
                                }
                                  
                                ?>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             
            <div class="modal fade" id="exampleModal<?=$res['ID']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal<?=$res['ID']?>Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal<?=$res['ID']?>Label">New review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="update_game.php" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="id" value="<?=$res['ID']?>">
                    <input type="hidden" class="form-control" name="page" value="education.php">
                    <div class="form-group">
                        
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" name="name" value="<?=$res['name']?>">
                    </div>
                    <div class="form-group">
                        <label for="age" class="col-form-label">Age:</label>
                        <input type="text" class="form-control" name="age" value="<?=$res['age']?>">
                    </div>

                    <div class="form-group">
                        <label for="rating" class="col-form-label">Rating:</label>
                        <input type="text" class="form-control" name="rating" value="<?=$res['rating']?>">
                    </div>

                   <?php
                        $gen=$res['genre'];
                        $qq=mysqli_query($conn,"SELECT `name` FROM genre WHERE ID='$gen' ");
                        $dt=mysqli_fetch_array($qq);
                        

                        ?>

                    <div class="form-group">
                        <label for="genre" class="col-form-label">Genre: <?=$dt['name']?></label>
                        <?php
                        include "db_connect.php";
                        $result=mysqli_query($conn,"SELECT * FROM genre");              
                       ?>
                        
                        <select name="genre" class="form-control">
                            <option value="" >--Select--</option>
                            <?php
                            while($row = mysqli_fetch_array($result))
                            { ?>
                            <option value="<?=$row['ID']?>"><?=$row['name']?></option>"
                            <?php  }
                            ?>        
                        </select>
                        </p>
                    </div>                    

                    <div class="form-group">
                        <label for="photo" class="col-form-label">Photo:</label>
                        <input type="file" class="form-control" name="uploadimage" value="<?=$res['photo']?>">
                    </div>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Send</button>
                </div>
                </form>
                </div>
            </div>
            </div>



        </div>
    </section>

    <?php
}


?>



   
    </div>
    </div>




    <br>
    <br>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <p>Copyright © 2022 App advice All Rights Reserved.</p>
                    <br>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        $('#exampleModal<?=$res['ID']?>').appendTo("body").modal('show'); 
    </script>
    <script>
        var interleaveOffset = 0.5;

        var swiperOptions = {
            loop: true,
            speed: 1000,
            grabCursor: true,
            watchSlidesProgress: true,
            mousewheelControl: true,
            keyboardControl: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            on: {
                progress: function () {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        var slideProgress = swiper.slides[i].progress;
                        var innerOffset = swiper.width * interleaveOffset;
                        var innerTranslate = slideProgress * innerOffset;
                        swiper.slides[i].querySelector(".slide-inner").style.transform =
                            "translate3d(" + innerTranslate + "px, 0, 0)";
                    }
                },
                touchStart: function () {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = "";
                    }
                },
                setTransition: function (speed) {
                    var swiper = this;
                    for (var i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = speed + "ms";
                        swiper.slides[i].querySelector(".slide-inner").style.transition =
                            speed + "ms";
                    }
                }
            }
        };

        var swiper = new Swiper(".swiper-container", swiperOptions);
    </script>
</body>

</html>
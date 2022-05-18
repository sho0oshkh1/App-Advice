<?php 
    include "header.php";
    
?>
<!DOCTYPE html>

<html lang="en">



<head>



    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">



    <title>App advice</title>



    <!-- Bootstrap core CSS -->

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">





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
    <!-- **** apps in Categoreas***** -->
    <section class="services" id="services">

        <div class="container">

          <?php
            include "db_connect.php";
            $query=mysqli_query($conn,'SELECT * FROM genre');
                   while($r=mysqli_fetch_assoc($query)){ ?>
                <div class="col-lg-6">

                <div class="service-item">

                    <i class="fas fa-puzzle-piece"></i>

                    <!-- <h4>ACTION </h4> -->

                    <h4><a href="<?=$r['name']?>.php"><?=$r['name']?></a></h4>

                    <!-- <a href="sport.html" class="logo"> -->

                </div>

                </div>

                <?php
            }
          ?>
        </div>
    </section>

    <section class="testimonials" id="testimonials">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 offset-lg-3">

                    <div class="section-heading">

                        <h4> Popular games</h4>
                        <?php
                         $quer=mysqli_query($conn,"SELECT * FROM genre") or die(mysqli_error($conn));
                         

                        ?>

                    </div>

                </div>

                <div class="col-lg-10 offset-lg-1">

                    <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">

                        <?php
                        include "db_connect.php";
                        

                        while($w=mysqli_fetch_assoc($quer)){
                            
                           
                            $genre=$w['ID'];
                            
                            $pp=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM game WHERE genre='$genre' LIMIT 1 "));
                           

                            ?>
                            <div class="item">

                            <i class="fas fa-puzzle-piece"></i>

                            <p><?=$w['name']?></p>

                            <h4><a href="game-detail-view.php?id=<?=$pp['ID']?>"><?=$pp['name']?></a></h4>

                            <div class="right-image">

                                <a href="game-detail-view.php?id=<?=$pp['ID']?>" class="logo">

                                    <img src="assets/images/<?=$pp['photo']?>" alt="">

                                </a>

                            </div>

                            </div>


                            <?php
                        }
                        ?>
                       

                    </div>

                </div>

            </div>

        </div>

    </section>

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

                progress: function() {

                    var swiper = this;

                    for (var i = 0; i < swiper.slides.length; i++) {

                        var slideProgress = swiper.slides[i].progress;

                        var innerOffset = swiper.width * interleaveOffset;

                        var innerTranslate = slideProgress * innerOffset;

                        swiper.slides[i].querySelector(".slide-inner").style.transform =

                            "translate3d(" + innerTranslate + "px, 0, 0)";

                    }

                },

                touchStart: function() {

                    var swiper = this;

                    for (var i = 0; i < swiper.slides.length; i++) {

                        swiper.slides[i].style.transition = "";

                    }

                },

                setTransition: function(speed) {

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
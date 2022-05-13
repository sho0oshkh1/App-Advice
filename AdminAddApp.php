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

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"

    rel="stylesheet">



  <title>Admin Add App</title>



  <!-- Bootstrap core CSS -->

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



  <!-- Additional CSS Files -->

  <link rel="stylesheet" href="css.css">

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







  <div class="page-heading">

    <div class="container">

      <div class="row">

        <div class="col-lg-12">

          <div class="header-text">

            <h2>Add App</h2>

            <div class="div-dec"></div>

          </div>

        </div>

      </div>

    </div>

  </div>



  <section class="contact-us-form">

    <div class="container">

      <div class="row">

        <div class="col-lg-6 offset-lg-3">

          <div class="section-heading">

            <h4>Add App</h4>

          </div>

        </div>

        <div class="col-lg-10 offset-lg-1">

          <form action="add_app.php" method="post" enctype="multipart/form-data">

            <div class="row">

              <div class="col-lg-6">

                <h5>Game name:</h5>

                <br>

                <fieldset>

                  <input type="text" placeholder="Game name" name="name"></input>

                </fieldset>
				
					  <h5> Genre:</h5>

                <br>

                <fieldset>
<!-- 
                <label for="genre" class="col-form-label">Genre:</label> -->
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

                </fieldset>
				
				  <h5> Age:</h5>

                <br>

                <fieldset>

                  <input type="text" placeholder="+10" name="age"></input>

                </fieldset>

              </div>

              <div>

                <h5>Add photo:</h5>

                <br>

                <input type="file" name="uploadimage">

              </div>

              <div class="col-lg-12">

                <fieldset>

                  <button type="submit" id="submit" name="submit" class="orange-button">Add</button>

                </fieldset>

              </div>

            </div>

          </form>

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

          <p>Copyright © 2022 App advice All Rights Reserved.</p>

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
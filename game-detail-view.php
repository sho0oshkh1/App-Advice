<?php
 include "header.php";
 $itemid=$_GET["id"];
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

  <title>Super Mario Bros</title>

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
</head>

<body>
<?php
   include "db_connect.php";
   $q=mysqli_query($conn,"SELECT * FROM game WHERE ID='$itemid'");
   $r=mysqli_fetch_array($q);
   $rq=mysqli_query($conn,"SELECT * FROM review WHERE game_ID='$itemid'");   

   $sum=mysqli_fetch_array(mysqli_query($conn,"SELECT SUM(rating) AS rate FROM rating WHERE game_ID='$itemid' "));
   $sr=$sum['rate'];
   $av=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM rating WHERE game_ID='$itemid' "));

   if(($av)>0){
    $final=($sr)/($av);
   }else{
    $final=0;
   }

  //  $query=mysqli_query($conn,"SELECT game.ID AS gid,game.name AS gname,game.genre,game.age,game.photo,review.ID,review.name AS rname,review.write_review,review.game_ID FROM game JOIN review ON game.ID=review.game_ID WHERE game.ID='$itemid' ") or die(mysqli_error($conn));
  //  $result=mysqli_fetch_array($query);

?>

  <div class="page-heading" style="background-image: url(./assets/images/super-mario-bros-cover.jpg);">
    <div class="container" style="filter:brightness(100%);">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2 class="bg-black"><?=$r['name']?></h2>
            <div class="div-dec" style="background:black;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Main Banner Area End ***** -->

  <section class="game-detail">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 px-4">
          <div class="left-image">
            <img src="assets/images/<?=$r['photo']?>" alt="">
          </div>
          <div class="game-data mt-2">
            <b>Genre:</b>
            <span class="badge rounded-pill bg-primary"><?php
            $name=$r['genre'];
            $sq=mysqli_query($conn,"SELECT * FROM genre WHERE ID='$name' ");
            $sr=mysqli_fetch_array($sq);
            echo $sr['name'];            
            ?>
            </span>            
            <br>
            <b>Ratings:
              <?php
                //  $stars=$r['rating'];
                $stars=$final;

                 if(($stars) == 0){
                   ?>
                   <i class="fas fa-star" style="color: #7E7D7D"></i>
                   <i class="fas fa-star" style="color: #7E7D7D"></i>
                   <i class="fas fa-star" style="color: #7E7D7D"></i>
                   <i class="fas fa-star" style="color: #7E7D7D"></i>
                   <i class="fas fa-star" style="color: #7E7D7D"></i>
                   <?php
                 }
                 if((($stars) > 0)&&(($stars) <= 1)){
                  ?>
                  <i class="fas fa-star" style="color: goldenrod"></i>
                  <i class="fas fa-star" style="color: #7E7D7D"></i>
                  <i class="fas fa-star" style="color: #7E7D7D"></i>
                  <i class="fas fa-star" style="color: #7E7D7D"></i>
                  <i class="fas fa-star" style="color: #7E7D7D"></i>
                  <?php
                }
                 if((($stars) > 1)&&(($stars) <= 2)){
                  ?>
                  <i class="fas fa-star" style="color: goldenrod"></i>
                  <i class="fas fa-star" style="color: goldenrod"></i>
                  <i class="fas fa-star" style="color: #7E7D7D"></i>
                  <i class="fas fa-star" style="color: #7E7D7D"></i>
                  <i class="fas fa-star" style="color: #7E7D7D"></i>
                  <?php
                }
                if((($stars) > 2)&&(($stars) <= 3)){
                  ?>
                  <i class="fas fa-star" style="color: goldenrod"></i>
                  <i class="fas fa-star" style="color: goldenrod"></i>
                  <i class="fas fa-star" style="color: goldenrod"></i>
                  <i class="fas fa-star" style="color: #7E7D7D"></i>
                  <i class="fas fa-star" style="color: #7E7D7D"></i>
                  <?php
                }
                if((($stars) > 3)&&(($stars) <= 4)){
                  ?>
                  <i class="fas fa-star" style="color: goldenrod"></i>
                  <i class="fas fa-star" style="color: goldenrod"></i>
                  <i class="fas fa-star" style="color: goldenrod"></i>
                  <i class="fas fa-star" style="color: goldenrod"></i>
                  <i class="fas fa-star" style="color: #7E7D7D"></i>
                  <?php
                }
                if(($stars)>4){
                  ?>
                  <i class="fas fa-star" style="color: goldenrod"></i>
                  <i class="fas fa-star" style="color: goldenrod"></i>
                  <i class="fas fa-star" style="color: goldenrod"></i>
                  <i class="fas fa-star" style="color: goldenrod"></i>
                  <i class="fas fa-star" style="color: goldenrod"></i>
                  <?php
                }
              ?>

              <!-- <img src="https://duckduckgo.com/i/fa8fd44a.png" style="width: 35%; padding-top: 1px;padding-left: 3px" /> -->

            </b><br>
            <b>Age:</b> <?=$r['age']?><br>
          </div>
        </div>
        <div class="col-lg-8">          
          <div class="btn btn-primary mb-3">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add review</button>
          </div>          
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="add_review.php">
                    <input type="hidden" class="form-control" name="game_ID" value="<?=$r['ID']?>">
                      <div class="form-group">
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" name="name"required >
                      </div>
                      <div class="form-group">
                        <label for="write_review" class="col-form-label">Review:</label>
                        <textarea class="form-control" name="write_review" required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="write_review" class="col-form-label">Rate:</label>                      
                        <select name="rating">
                        <option value="">--Select value--</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option> 
                          <option value="4">4</option> 
                          <option value="5">5</option>                          
                        </select>
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
          <?php
            while($res=mysqli_fetch_assoc($rq)){
            if(!empty($res)){
              ?>
              <div class="card px-4 py-3 mb-3">
                <div class="card-title">
                  <?=$res['name']?>
                </div>
                <div class="card-subtitle mb-2 text-muted">
                  <?=$res['write_review']?>
                </div>
              </div>
              <?php
            }
            if(empty($res)){
              ?>
              <div class="card px-4 py-3 mb-3">
                <div class="card-title">
                  Oops!!
                </div>
                <div class="card-subtitle mb-2 text-muted">
                  Has no reviews.
                </div>
              </div>
              <?php
            }
          }
          ?> 
        </div>
  </section>

  <section class="partners">
  </section>

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
<!DOCTYPE php>

<php lang="en">



    <head>



        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description" content="">

        <meta name="author" content="">

        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">



        <title>Admin Log-in</title>



        <!-- Bootstrap core CSS -->

        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



        <!-- Additional CSS Files -->

        <link rel="stylesheet" href="assets/css/fontawesome.css">

        <link rel="stylesheet" href="assets/css/templatemo-574-mexant.css">

        <link rel="stylesheet" href="assets/css/owl.css">

        <link rel="stylesheet" href="assets/css/animate.css">

        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

        <link rel="stylesheet" href="css.css">

        <!--



TemplateMo 574 Mexant



https://templatemo.com/tm-574-mexant



-->



    </head>



    <body>





        <!-- ***** Header Area Start ***** -->

        <header class="header-area header-sticky">

            <div class="container">

                <div class="row">

                    <div class="col-12">

                        <nav class="main-nav">

                            <!-- ***** Logo Start ***** -->

                            <a href="index.php" class="logo">

                                <img src="assets/images/logo.png" alt="">

                            </a>

                            <!-- ***** Logo End ***** -->

                            <!-- ***** Menu Start ***** -->

                            <ul class="nav">

                                <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>

                            </ul>


                            <a class='menu-trigger'>

                                <span>Menu</span>

                            </a>

                            <!-- ***** Menu End ***** -->

                        </nav>

                    </div>

                </div>

            </div>

        </header>

        <!-- ***** Header Area End ***** -->



        <div class="page-heading">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="header-text">

                            <h2>Admin Log-in</h2>

                            <div class="div-dec"></div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <section class="contact-us-form">

            <div class="container">

                <div class="row">

                    <div class="col-lg-10 offset-lg-1">

                        <form id="contact" action="login_details.php" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="alert-danger">
                                        <i>Wrong details. Try again!</i>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-lg-6">

                                    <fieldset>

                                        <h5>Username:</h5>

                                        <input type="text" name="username" id="username" placeholder="username" autocomplete="on" required>

                                    </fieldset>

                                </div>

                                <div class="col-lg-6">

                                    <fieldset>

                                        <h5>Password:</h5>

                                        <input type="password" name="password" id="password" placeholder="password" autocomplete="on" required>

                                    </fieldset>

                                </div>

                                <div class="col-lg-12">

                                    <fieldset>

                                    <div class="card-footer">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>

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



</php>
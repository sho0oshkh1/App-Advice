<?php
session_start();
if((isset($_SESSION['id']))&&(isset($_SESSION['username']))){
    $id=$_SESSION['id'];
    $username=$_SESSION['username'];
}
include "functions.php";

?>
  <!-- ***** Header Area Start ***** -->

  <header class="header-area header-sticky">

    <div class="container">

      <div class="row">

        <div class="col-12">

          <nav class="main-nav">

            <!-- ***** Logo Start ***** -->

            <a href="index.php" class="logo">
              <img src="assets/images/logo.png" alt="" style="width:90px;">
              
            </a>
            <!-- ***** Logo End ***** -->           

            <?php
            if(isset($id)){
                ?>
                <ul class="nav">
                <li class="scroll-to-section"><a href="logout.php" class="active">Log out</a>
                </li>
                </ul>
 
                <?php
            }else{

                ?>

            <ul class="nav">
              <li class="scroll-to-section"><a href="Admin-log.php" class="active">Log in</a>
              </li>
            </ul>

                <?php
            }
            ?>

          </nav>

        </div>

      </div>

    </div>

  </header>
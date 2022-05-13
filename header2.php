<?php
session_start();
if((isset($_SESSION['id']))&&(isset($_SESSION['username']))){
    $id=$_SESSION['id'];
    $username=$_SESSION['username'];
}
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
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
                        </ul>
						<?php
                        if(isset($id)){
                            ?>
                            <ul class="nav">
                            <li class="scroll-to-section"><a href="logout.php" class="active">Log out</a></li>
                            </ul>
                            <ul class="nav">
                                <li class="scroll-to-section"><a href="AdminAddApp.php" class="active">Add app</a></li>
                            </ul>
                            
                            <?php
                        }

                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- **** apps in Categoreas***** -->
<!DOCTYPE html>
<html>
    <head>
        <!-- included title -->
        <?php
        $title = "Home";
        require_once 'titletag.php';
        ?>

        <?php
        // inlcuded meta, link  and header elements
        require_once 'header.php';
        ?>               
    </head>

    <body>    
       
       <?php require_once 'navs.php';?> 

        <!-- image carousal starts -->
        <div class="container;">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="banner1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="banner2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="banner3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="banner4.jpg" alt="Third slide">
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
            </a>
        </div>
        <!-- image carousal ends  -->
    </body>

    <!-- footer  -->
    <?php include 'footer.php';?>

</html>
    <!-- EOF $ -->










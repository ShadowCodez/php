<!DOCTYPE html>
<html lang="en">
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

    <div class="container">
        <img class="w-75" src="about_us.jpg" alt="image" style="margin-left:140px;">
        <p style="text-align:center; margin-top:20px; ">ToyFight is an award-winning creative design agency.<br><br>
           You’ll find the About Page at the top of the menu under the Who section.<br><br>
           This page has a unique feel, thanks to the deconstructed action figures representing the founders, Leigh Whipday and Jonny Lander.<br><br>
           The great attention to detail and interactivity also reflect the company’s 16 years of experience.
    </div>
</body>

 <!-- footer  -->
 <?php include 'footer.php';?>

</html>
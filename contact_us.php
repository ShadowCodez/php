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

    <div class="container-fluid contact-form bg-primary" style="margin-top:50px;">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div><br>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div><br>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div><br>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>
</body>

 <!-- footer  -->
 <?php include 'footer.php';?>

</html>
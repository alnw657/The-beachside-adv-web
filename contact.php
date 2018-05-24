<!DOCTYPE html>
<html lang="en">
    <?php include('includes/autoloader.php');?>
   <?php include ('includes/head.php'); ?>
   <?php include ('includes/header.php'); ?>
<body>

  <!-- our main section here -->
  
  <div class="mainsection">
    <div class="row">
      <section class="col text-center">
    
      <img class="d-block w-100" src="images/carousel/main1.jpg">
    
   

      </section>
    
      </div>
      
      
    </div>
    
    
    
    <div class="container">
  
          <?php
      include('includes/breadcrumbs.php');
      ?>
    

 <section class="section">

    <!--Section heading-->
    <h2 class="section-heading h1 pt-4">Contact us</h2>
    <!--Section description-->
    <p class="section-description">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-8 col-xl-9">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="center-on-small-only">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 col-xl-3">
            <ul class="contact-icons">
                <li><i class="fa fa-map-marker fa-2x"></i>
                    <p>7 Kelly St, Ultimo NSW 2007</p>
                </li>

                <li><i class="fa fa-phone fa-2x"></i>
                    <p>(02) 9211 8399</p>
                </li>

                <li><i class="fa fa-envelope fa-2x"></i>
                    <p>contact@mdbootstrap.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->


</div>


  </div> <!-- mainsection container-->
  
    
 <?php include ('includes/foot.php'); ?>
  </body>  

</html>


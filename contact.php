<!DOCTYPE html>
<html lang="en">
   <?php include ('includes/head.php'); ?>
<body>
  <div class="topHeader row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
      <ul class="topHeaderList">
        <li><a href="#">Degree</a></li>
        <li><a>|</a></li>
        <li><a href="#">Find Hotel</a></li>
      </ul>
    </div>
        
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <a href="index.php" class="logo"><img class="logo" src="images/logo.png"></a>
      </div>
      
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <button class="btn">Book</button>
      </div>
    </div> <!-- topHeader container -->
    
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ACCOMMODATION
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Rooms</a>
            <a class="dropdown-item" href="#">Suites</a>
          </div>
        </li>
        
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            SERVICES
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Spa</a>
            <a class="dropdown-item" href="#">Events</a>
            <a class="dropdown-item" href="#">Transfer</a>
          </div>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ACTIVITIES
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Sports</a>
            <a class="dropdown-item" href="#">Kids Club</a>
            <a class="dropdown-item" href="#">Sight seeing </a>
          </div>
        </li> 
        
          <li class="nav-item">
        <a class="nav-link" href=".php">CONTACT US</a>
      </li>
        
         <li class="nav-item">
        <a class="nav-link" href="#">ABOUT US</a>
      </li>
        
      </ul> <!-- ul navbar-nav mr-auto -->
    </div> <!-- collapse navbar-collapse container -->
  </nav> <!-- navbar container -->
  
  <!-- our main section here -->
  
  <div class="mainsection">
    <div class="row">
      <section class="col text-center">
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
      </section>
    
      
      
      
    </div>
    
    
    
    
    
    <div class="row">
      <section class="col"> 
        <h1>text</h1>
        <p>A web-based platform is required for this project, windows, mac and linux user will have access to the platform, being a responsive website will expand to mobile and tablets. Following design principles, such as relevancy, content, menu, Branding, design and other principles are very important to establish a solid connection with users and relying on a friendly user experience that can accommodate the information travellers are looking for.
        </p>
      </section>
    </div>
    
<div class="container">
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


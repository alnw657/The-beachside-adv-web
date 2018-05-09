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
          <a class="nav-link dropdown-toggle" href="accommodation.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ACCOMMODATION
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="accommodation.php">Rooms</a>
            <a class="dropdown-item" href="accommodation.php">Suites</a>
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
        <a class="nav-link" href="#">CONTACT US</a>
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
        <div>
          <img src="images/beach.jpg" alt="Beach section" class="mainimg img-fluid rounded figure-img">
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
  </div> <!-- mainsection container-->
  
  <div class="testimonialsection">
    <div class="row">
      <section class="col-lg-4 col-md-4 col-sm-4 col-xs-12-6">
        <img src="images/beach.jpg" class="smimg img-fluid">
        <h4>Grooming</h4>
        <p>Our therapeutic <span class="font-weight-bold">grooming</span> treatments help battle fleas,
        allergic dermatitis, and other challenging skin conditions.</p>
        
      </section>
      
      <section class="col-lg-4 col-md-4 col-sm-4 col-xs-12-6"> 
        <img src="images/beach.jpg" class="smimg img-fluid">
        <h4>Grooming</h4>
        <p>Our therapeutic <span class="font-weight-bold">grooming</span> treatments help battle fleas,
        allergic dermatitis, and other challenging skin conditions.</p>
        
      </section>
      
      <section class="col-lg-4 col-md-4 col-sm-4 col-xs-12-6"> 
        <img src="images/beach.jpg" class="smimg img-fluid">
        <h4>Grooming</h4>
        <p>Our therapeutic <span class="font-weight-bold">grooming</span> treatments help battle fleas,
        allergic dermatitis, and other challenging skin conditions.</p>
        
      </section>
    </div>  <!-- row container -->
    
  </div><!-- testimonialsection container --> 
  
  <div >
    <div class="row">
        <section class="col-lg-4 col-md-4 col-sm-4 col-xs-12-6">
          <img src="images/beach.jpg" class="img-fluid" style="max-width">
        </section>
        
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12-6"> 
          <img src="images/beach.jpg" class=" img-fluid">
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12-6"> 
          <img src="images/beach.jpg" class=" img-fluid">
        </div>
    </div>  <!-- row container -->
  </div> <!--anotherimg-->
  
  <!--Footer here -->
 <?php include ('includes/footer.php'); ?>
  </body>  

</html>
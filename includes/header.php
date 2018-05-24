<!DOCTYPE html>
<html lang="en">
   <?php include ('includes/head.php'); ?>
   
<body>
  <div class="topHeader row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
      <ul class="topHeaderList">
        <li><a href="#">Degree</a></li>
        <li><a>|</a></li>
        <li><a href="booking.php">Find Hotel</a></li>
      </ul>
    </div>
        
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <a href="index.php" class="logo"><img class="logo" src="images/logo.png"></a>
      </div>
      
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <button class="btn"><a href="booking.php">Book</a></button>
        
      </div>
    </div> <!-- topHeader container -->
    
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="accommodation.php" id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
            ACCOMMODATION
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="accommodation.php">Rooms</a>
            <a class="dropdown-item" href="accommodation.php">Suites</a>
          </div>
        </li>
        
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="services.php" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
            SERVICES
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="spa.php">Spa</a>
            <a class="dropdown-item" href="events.php">Events</a>
            <a class="dropdown-item" href="transfer.php">Transfer</a>
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
        <a class="nav-link" href="contact.php">CONTACT US</a>
      </li>
        
         <li class="nav-item">
        <a class="nav-link" href="#">ABOUT US</a>
      </li>
        
      </ul> <!-- ul navbar-nav mr-auto -->
    </div> <!-- collapse navbar-collapse container -->
  </nav> <!-- navbar container -->
  
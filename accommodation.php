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
  
 <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Messages</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
  </li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">a</div>
  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">bb</div>
  <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">ccc</div>
  <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">dddd</div>
</div>

<script>
  $(function () {
    $('#myTab li:last-child a').tab('show')
  })
</script>
  
  
</div>


  </div> <!-- mainsection container-->
  
  
    
 <?php include ('includes/footer.php'); ?>
  </body>  

</html>


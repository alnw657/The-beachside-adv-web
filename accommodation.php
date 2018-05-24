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
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-50" src="images/carousel/accommodation1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-50" src="images/carousel/accommodation2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-75" src="images/carousel/accommodation3.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-75" src="images/carousel/accommodation4.jpg" alt="Fourth slide">
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
    

    <div class ="container">
          <?php
      include('includes/breadcrumbs.php');
      ?>
    
    <div class="row">
      <section class="col"> 
        <h1>Accomodation</h1>
        <p>A web-based platform is required for this project, windows, mac and linux user will have access to the platform, being a responsive website will expand to mobile and tablets. Following design principles, such as relevancy, content, menu, Branding, design and other principles are very important to establish a solid connection with users and relying on a friendly user experience that can accommodate the information travellers are looking for.
        </p>
      </section>
    </div>
    
<div class="container">
 <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="condo-tab" data-toggle="tab" href="#condo" role="tab" aria-controls="condo" aria-selected="true">Condo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="suites-tab" data-toggle="tab" href="#suites" role="tab" aria-controls="suites" aria-selected="false">Suites</a>
  </li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="condo" role="tabpanel" aria-labelledby="condo-tab">
    <!-- condo-->
    
    <div class="row">
      <div class="col-sm-6"> 
            <div class="thumbnail">
                <img class="group list-group-image" src="images/room images/oceanview-condo.jpg" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Ocean View</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="condodetail.php">Detail</a>
                        </div>
                    </div>
               
            </div>
        </div>
        </div>
       <div class="col-sm-6"> 
            <div class="thumbnail">
                <img class="group list-group-image" src="images/room images/gardenview-condo.jpg" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Garden View</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="condodetail.php">Detail</a>
                        </div>
                    </div>
               
            </div>
        </div>
        </div>
    </div>
    
     <div class="row">
 <div class="col-sm-6"> 
            <div class="thumbnail">
                <img class="group list-group-image" src="images/room images/family-condo.jpg" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Family</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="condodetail.php">Detail</a>
                        </div>
                    </div>
               
            </div>
        </div>
        </div>
    </div>
    
     <!-- condo-->
    
  </div>
  
  
  
  <div class="tab-pane" id="suites" role="tabpanel" aria-labelledby="suites-tab">
    
     <div class="col-sm-6"> 
            <div class="thumbnail">
                <img class="group list-group-image" src="images/room images/suite.jpg" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Luxury Suite</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="suiteDetail.php">Detail</a>
                        </div>
                    </div>
               
            </div>
        </div>
        </div>
    
    
  </div>
</div>

<script>
  $(document).ready(function (){
    if($("#condo-tab"){
        alert("dsdtd");
       
    }
  });
</script>
  
  
</div>


  </div> <!-- mainsection container-->
  
  </div>
    
 <?php include ('includes/foot.php'); ?>
  </body>  

</html>


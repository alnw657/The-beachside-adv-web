<?php include ('includes/header.php'); ?>

<?php
            $host = "127.0.0.1";
            $user = "alnw657";                     //Your Cloud 9 username
            $pass = "";                                  //Remember, there is NO password by default!
            $db = "db";                                  //Your database name you want to connect to
            $port = 3306;                                //The port #. It is always 3306
            
            $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
        
        
        
            //features query
            $query = "SELECT * FROM `features`";
            $result = mysqli_query($connection, $query);
            
           //description query
            $descriptionQuery = "SELECT * FROM `description`";
            $descriptionResult = mysqli_query($connection, $descriptionQuery);
            $row = mysqli_fetch_assoc($descriptionResult);
            $description = $row['desc'];
            $header = $row['header'];
            
            
           //while ($row = mysqli_fetch_assoc($result)) { 
             //   $description = $row['features_id']; 
               // $descriptionHeader = $row['features_name'];
        //   }
        
        for($x = 0; $row = mysqli_fetch_assoc($result); $x++){
            $featuresName[$x] = $row['features_name']; 
          $descriptionHeader[$x] = $row['features_id'];
        }
        
        
        
        $feat2query = "SELECT * FROM `features2`";
        $feat2result = mysqli_query($connection, $feat2query);
            
        for($x = 0; $row = mysqli_fetch_assoc($feat2result); $x++ ){
            $features2name[$x]  = $row['features_name'];
            $features2id[$x] = $row['features_id'];
        }
        
         $feat3query = "SELECT * FROM `features3`";
        $feat3result = mysqli_query($connection, $feat3query);
            
        for($x = 0; $row = mysqli_fetch_assoc($feat3result); $x++ ){
            $features3name[$x]  = $row['features_name'];
            $features3id[$x] = $row['features_id'];
        }
            
        if( isset($_GET["room_id"]) ){
  
            $room_id = $_GET['room_id'];
        }
        else{
            echo "You will be redirected to the home page after 5 seconds";
            ;
        }
        
?>
        
        
<div class="container">
    

    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <img src="https://via.placeholder.com/300x300">
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <img src="https://via.placeholder.com/300x300">
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <img src="https://via.placeholder.com/300x300">
        </div>
    </div>
</div> <!-- container images -->

<div class="more-info">
    
    <div class="buttonHolder">
        <button class="btn"><a href="booking.php <?php   $room_id = "10" ?> ">BOOK NOW</a></button>
    </div>
    <h6 class="text-uppercase roomTitle"> <?php echo $header; ?></h6>
   
 
    <p class="roomDescription"> <?php echo $description; ?>  </p>
    
    <div class="condoFeatures">
        <h5 class=" text-uppercase title">Condo Features</h5>
        <ul>
            <li>
                <?php foreach ($featuresName as $value) {
                        echo   $value."</br>";} ?>  
            </li>
        </ul>
        <ul>
            <li>
                <?php foreach ($features2name as $value) {
                        echo   $value."</br>";} ?>
            </li>
        </ul>
        <ul>
            <li>
                <?php foreach ($features3name as $value1) {
                        echo   $value1."</br>";} ?>
            </li>
        </ul>
        
    </div><!--condofeatures-->
    
</div> <!-- more-info -->



<!--Footer here -->
 <?php include ('includes/foot.php'); ?>
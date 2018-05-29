<?php
include('autoloader.php');
include ('includes/header.php');

$db = new Database();

$id = $_GET["room_id"];
//get the room with this id from database

$query = 'SELECT * from Rooms WHERE room_id = ?';

$statement = $db -> connection -> prepare( $query);//prevent from breasking the app
$statement -> bind_param('i', $id);
$statement -> execute();

$result = $statement -> get_result();

if( $result -> num_rows ){
    $room = $result -> fetch_assoc();
    
    $name = $room["room_name"];
    $max_adults = $room["max_adults"];
    
    echo $name . "sleeps" . $max_adults;
}



 $query = "SELECT * FROM `features`";
            $result = mysqli_query($db -> connection, $query);
            
           //description query
            $descriptionQuery = "SELECT * FROM `description`";
            $descriptionResult = mysqli_query($db -> connection, $descriptionQuery);
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
        $feat2result = mysqli_query($db -> connection, $feat2query);
            
        for($x = 0; $row = mysqli_fetch_assoc($feat2result); $x++ ){
            $features2name[$x]  = $row['features_name'];
            $features2id[$x] = $row['features_id'];
        }
        
         $feat3query = "SELECT * FROM `features3`";
        $feat3result = mysqli_query($db -> connection, $feat3query);
            
        for($x = 0; $row = mysqli_fetch_assoc($feat3result); $x++ ){
            $features3name[$x]  = $row['features_name'];
            $features3id[$x] = $row['features_id'];
        }
        
          $room_id = $_GET['room_id'];



?>




<div class="container">
     <?php include('includes/breadcrumbs.php');
     
      ?>

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
        <button class="btn"><a href="booking.php?room_id=<?php echo $room_id; ?>" >BOOK NOW</a></button>
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
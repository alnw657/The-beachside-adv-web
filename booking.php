<?php 
include('autoloader.php');
include ('includes/bookingheader.php'); 

?>









<div class="featureImage">
    <h1>Heading!!</h1>
</div>
<div class="container">
    <?php include ('includes/breadcrumbs.php'); ?>
    
    
   
    <form class="bookingForm" action="includes/insert.php" method="post">
       
        <div class="row bookingFormRow">
            
           <!-- <div class="col-md-2">
                <label for="firstName">First name</label>
                <input type="text" name="firstName"/>
            </div>
            
            <div class="col-md-2">
                <label for="LastName">Last name</label>
                <input type="text" name="LastName"/>
            </div> -->
            
            <div class="col-md-2">
                <label for="date_in">Check in</label>
                <input type="date" name="date_in" id="date_in"/>
            </div>
            <div class="col-md-2">
                <label for="date_out">Check out</label>
                <input type="date" name="date_out" id="date_out"/>
            </div>
            <div class="col-md-2"><label for"adults">Adults</label>
                <select name="adults">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            </div>
            <div class="col-md-2"><label for="children">Children</label>
                <select name="children">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            </div>
            <div class="col-md-2"><label for="infants">Infants</label>
                <select name="infants">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
               
            </select>
            </div>
            <div class="col-md-2">
                <input type="submit" value="Book">
            </div>
        </div>
    </form>
</div>

 <?php include ('includes/foot.php'); ?>
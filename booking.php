<?php 
include('includes/autoloader.php');
include ('includes/header.php'); 
?>

<div class="featureImage">
    <h1>Heading!!</h1>
</div>
<div class="container">
    <form class="bookingForm">
        <div class="row bookingFormRow">
            <div class="col-md-2">
                <label for="checkIn">Check in</label>
                <input type="date" name="checkIn"/>
            </div>
            <div class="col-md-2">
                <label for="checkOut">Check out</label>
                <input type="date" name="checkOut"/>
            </div>
            <div class="col-md-2">
                <label for"adults">Adults</label>
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
            <div class="col-md-2">
                <label for="infants">Infants</label>
                <select name="infants">
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
            <div class="col-md-2">
                <button class="btn btn-default">Book</button>
            </div>
        </div>
    </form>
</div>

 <?php include ('includes/foot.php'); ?>
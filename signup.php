<?php 
include('autoloader.php');
include ('includes/header.php');
?>

<div class="container">
    <div class="form-group">
        <h3>Welcome to Beach Side, please register your account here!</h3>
        <form class="registerForm">
            <input type="text" class="form-control inputRegister" placeholder="Your Name">
            <input type="email" class="form-control inputRegister" placeholder="Your Email">
            <input type="password" class="form-control inputRegister" placeholder="Your Password">
            <input type="password" class="form-control inputRegister" placeholder="Retype Password">
            <button class="registerBtn">Register Account</button>
            <p class="footerFormGroup">Have you already got an account? <a href="#">Sign in here.</a></p>
        </form>
    </div>
</div>

 <?php include ('includes/foot.php'); ?>
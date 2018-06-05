<?php 
include('autoloader.php');


session_start();

//check for POST request
if( $_SERVER['REQUEST_METHOD'] == 'POST'){
  //receive variables from form
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  
  $account = new Account();
  $registration = $account -> register( $username, $email, $password );
  
  $success = array();
  $errors = array();
  
  if( $registration == true ){
    $success["registration"] = "Account successfully created!";
  }
  else{
    $errors["registration"] = "There has been an error!";
  }
}
?>



<html>
   <?php include ('includes/header.php'); ?>
    <body>
        <div class="container">
            <div class="form-group">
                <?php
              if( count($success) > 0 ){
                $msg = implode( " ", $success );
              
              echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                <strong>Success</strong> $msg
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                  <span aria-hidden=\"true\">&times;</span>
                </button>
              </div>";
              }
              
              if( count($errors) > 0 ){
                $msg = implode( " ", $errors );
              echo "<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                <strong>Error</strong> $msg
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                  <span aria-hidden=\"true\">&times;</span>
                </button>
              </div>";
              }
              ?>
                <h3>Welcome to Beach Side, please register your account here!</h3>
                <form class="registerForm" method="post" action="signup.php" novalidate>
        
                    <input id="username" class="form-control inputRegister" type="text" name="username" placeholder="Your name" required>
                        <div class="invalid-feedback">Please enter a valid username</div>
                    
                    <input id="email" class="form-control inputRegister" type="email" name="email" placeholder="jenny@example.com" required>
                        <div class="invalid-feedback">Please enter a valid email</div>
                    
                    <input id="password" class="form-control inputRegister" type="password" name="password" placeholder="minimum 8 characters" required>
                      <div class="invalid-feedback">Please enter a valid password</div>
                      <div class="alert-password"></div>
                      
                    
                    <button class="registerBtn">Register Account</button>
                    <p class="footerFormGroup">Have you already got an account? <a href="signin.php">Sign in here.</a></p>
                    <p class="policyFormGroup">By clicking “Sign up for BeachSide”, 
                    you agree to our terms of service and privacy statement. We’ll occasionally send you account related emails.</p>
                </form>
            </div>
        </div>
         <script src="/js/register.js"></script>
    </body>
</html>


 <?php include ('includes/foot.php'); ?>
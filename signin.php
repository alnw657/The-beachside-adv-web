<?php 
include('autoloader.php');
include ('includes/header.php');


//handle POST request
if( $_SERVER["REQUEST_METHOD"] == "POST" ){
  $credentials = $_POST["credentials"];
  $password = $_POST["password"];
  echo $credentials;
  echo $password;
  //create instance of account class
  $account = new Account();
  $login = $account -> authenticate( $credentials, $password );
  if( $login == true ){
    //all good
    $destination = "index.php";
    header("location: $destination");
  }
  else{
    //get errors
    $errors = $account -> errors;
    echo count ( $account -> errors );
  }
}



?>

<!DOCTYPE html>
<html>
    <body>
        <div class="container">
          <div class="form-group">
              <div class="row">
                <div class="col-md-6 offset-md-3">
                    <?php
                    if( count($account -> errors) > 0 ){
                      $error_string = implode(' ', $account -> errors );
                       $alert = "<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                                $error_string
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                  <span aria-hidden=\"true\">&times;</span>
                                </button>
                              </div>";
                      echo $alert;
                    }
                   
                    ?>
                  <h3>Sign in to Beachside</h3>
                  <form class="registerForm" method="post" action="signin.php" novalidate>
                      <input name="credentials" type="credentials" class="form-control inputRegister" placeholder="Your Email">
                      <div class="invalid-feedback">Please type a valid username or email</div>
                      <input name="password" type="password" class="form-control inputRegister" placeholder="Your Password">
                      <div class="invalid-feedback">Please type a valid password</div>
                      <button class="registerBtn">Sign in</button>
                      <p class="footerFormGroup">New to Beachside? <a href="signup.php">Create an account</a></p>
                      
                  </form>
                </div>
              </div>
            </div>
          </div>
          <script src="/js/login.js"></script>
    </body>
</html>


 <?php include ('includes/foot.php'); ?>
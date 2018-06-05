

function createURLRedirect(destination,params){
  //params has to be an object
  if( typeof params == 'object'){
    let keys = Object.keys( params );
    if( keys.length == 0){
      return false;
    }
    //construct url
    let url = destination;
    keys.forEach( (key,index) => {
      let param ='';
      if( index == 0 ){
        param = `?${key}=${params[key]}`;
      }
      else{
        param = `&${key}=${params[key]}`;
      }
      url += param;
    });
    return encodeURI(url);
  }
  else{
    return false;
  }
}

function addToCart(cartData){
  //send cardData via ajax request\
  $.ajax({
    url: '/ajax/shoppingcart.ajax.php',
    method: 'post',
    dataType: 'json',
    data: cartData
  })
  .done((response) => {
    if( response.success == true ){
      return true;
    }
    else{
      return false;
    }
  });
}

function addToWish(wishData){
  //send cardData via ajax request\
  $.ajax({
    url: '/ajax/wishlist.ajax.php',
    method: 'post',
    dataType: 'json',
    data: wishData
  })
  .done((response) => {
    if( response.success == true ){
      return true;
    }
    else{
      return false;
    }
  });
}

$(document).ready(
  () => {
    //FOR SHOPPING CART AND WISHLIST
    //get the current URL
    let url = new URL( decodeURI(window.location.href) );
    
    //get the URL GET parameters
    let urlParams = new URLSearchParams(url.search);
    
    //get the intended action eg cart or wish.
    //this is set in the detail.php page 
    let userAction = urlParams.get('action');
    let loginParams = {};
    
    if( userAction == 'wishlist' ){
      //get productId in the parameters
      let productId = urlParams.get('productId');
      loginParams = { productId: productId, action: userAction };
    }
    
    if( userAction == 'shoppingcart' ){
      //get productId in the parameters
      let productId = urlParams.get('productId');
      //get the quantity in the parameters
      let quantity = urlParams.get('quantity');
      loginParams = { productId: productId, quantity: quantity, action: userAction };
    }
    
    
    //modify the login URL in case user already has an account and decides to go to the login page
    let loginURL = createURLRedirect ('register.php' , loginParams );
    //createURLRedirect() returns either a url or false
    //if it's not false (there are url parameters) then change the login link with the url containing parameters
    if( loginURL ){
      $('a[href="register.php"]').attr('href', loginURL);
    }
    
    $('#login-form').on('submit',
      (event) => {
        event.preventDefault();
        //$(event.target).addClass('was-validated');
        let cred = $('#credentials').val();
        let pass = $('#password').val();
        //since we are only logging in, we only need to check if the fields are empty
        if( cred.length == 0 || pass.length == 0 ){
          //if form is empty, add class 'was-validated' (bootstrap form validation)
          $(event.target).addClass('was-validated');
        }
        //create a data object
        let loginData = {credentials: cred, password: pass};
        //add spinner
        let spinner = '<img class="icon spinner" src="/images/graphics/icons/moc-spin-circle.png">';
        $('button[name="login"]').append(spinner);
        //make ajax request with data
        $.ajax({
          url: '/ajax/login.ajax.php',
          method: 'post',
          dataType: 'json',
          data: loginData
        })
        .done( (response) => {
          $(event.target).find('.spinner').remove();
          if( response.success == false ){
            //login failed
            //check errors -- there are two errors, either account does not exist or password is wrong
            if(response.errors){
              //$('.invalid-feedback').text(response.errors);
              $('#credentials,#password').addClass('is-invalid');
            }
            //notify user
          }
          else{
            //login is successful
            //FOR SHOPPING CART
            //if user came from the detail page, add the items to the shopping cart or wishlist
            if( userAction == 'shoppingcart' ){
              //add the items to the cart and redirect to the detail page
              const cartData = { quantity: quantity, productId : productId, action: action };
              const cart = addToCart(cartData) ? true: false;
            }
            
            if( userAction == 'wishlist' ){
              //add the items to the cart and redirect to the detail page
              const wishData = { productId : productId, action: userAction };
              const wish = addToWish(wishData) ? true: false;
            }
            //redirect user to home page
            window.location.href='index.php';
          }
        });
        
      }
    );
    $('#login-form').on('input',(event) => {
      //remove error messages when user 
      $('#login-form').find('input').removeClass('is-invalid');
    });
  }
);




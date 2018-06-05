// This file has changed so errors are now shown using Bootstrap's built in classes
//read http://getbootstrap.com/docs/4.1/components/forms/#validation

function removeAlerts() {
  //remove all alerts
  $('.alert').remove();
}

function removeAlert(event) {
  //remove alert from particular inputs
  $(event.target).parents('.form-group').find('.alert').remove();
}

function showAlert(templateId,type,forElement,message){
  //get reference to the template
  let template = $('#'+templateId).html().trim();
  let clone = $(template);
  $(clone).addClass('alert-' + type);
  $(clone).find('.alert-message').text(message);
  //$(forElement).parents('.form-group').append(clone);
  $('#'+forElement).append(clone);
}

function showInvalid(inputelm,msg){
  let targetinput = 'input[name="'+inputelm+'"]';
  //add bootstrap validation class and change message
  $(targetinput).addClass('is-invalid');
  $(targetinput).parents('.form-group').find('.invalid-feedback').text(msg);
}

function validateForm(form_elm) {
  //simple form validation
  let inputs = $(form_elm).find('input');
  //check each input after converting into an array
  Array.from(inputs).forEach((input) => {
    
  });
}

//FOR SHOPPING CART

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

//FOR WISHLIST

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
    let loginURL = createURLRedirect ('login.php' , loginParams );
    //createURLRedirect() returns either a url or false
    //if it's not false (there are url parameters) then change the login link with the url containing parameters
    if( loginURL ){
      $('a[href="login.php"]').attr('href', loginURL);
    }
    
    
    $('#register-form').on('change', (event) => { 
      removeAlert(event); 
      $(event.target).removeClass('was-validated');
    });
    $('#register-form').on('submit', (event) => {
      event.preventDefault();
      //remove invalid classes
      $(event.target).find('input').removeClass('is-invalid');
      //validateForm(event.target);
      let username = $('input[name="username"]').val();
      let email = $('input[name="email"]').val();
      let password = $('input[name="password"]').val();
      if(username.length == 0 || email.length == 0 || password.length == 0){
        $(event.target).addClass('was-validated');
      }
      let registerdata = { username: username, email: email, password: password };
      //add spinner to button
      let spinner = '<img class="spinner" src="/images/graphics/spinner1.gif">';
      $('button[name="register-btn"]').append(spinner);
      $('button[name="register-btn"]').attr('disabled', '');
      $.ajax({
          url: '/ajax/register.ajax.php',
          method: 'post',
          dataType: 'json',
          data: registerdata
        })
        .done((response) => {
          //remove spinner from button
          $('button[name="register-btn"] img').remove();
          // remove all alerts
          removeAlerts();
          if (response.success == false) {
            //check for errors in different fields
            if (response.errors.username) {
              showAlert('alert-template','warning','alert-username',response.errors.username);
              showInvalid('username',response.errors.username);
            }
            if (response.errors.email) {
              showAlert('alert-template','warning','alert-email',response.errors.email);
              showInvalid('email',response.errors.email);
            }
            if (response.errors.password) {
              showAlert('alert-template','warning','alert-password',response.errors.password);
              showInvalid('password',response.errors.password);
            }
          }
          else{
            //if registration is successful
            showAlert('alert-template', 'success','alert-success','account registration successful');
            
            //FOR SHOPPING CART
            //if user came from the detail page, add the items to the shopping cart or wishlist
            if( userAction == 'shoppingcart' ){
              //add the items to the cart and redirect to the detail page
              const cartData = { quantity: quantity, productId : productId, action: userAction };
              const cart = addToCart(cartData) ? true: false;
            }
            
            if( userAction == 'wishlist' ){
              //add the items to the cart and redirect to the detail page
              const wishData = { productId : productId, action: userAction };
              const wish = addToWish(wishData) ? true: false;
            }
            
            //redirect the user somewhere
            
          }
          $('button[name="register-btn"]').removeAttr('disabled');
        });
    });
  }
);


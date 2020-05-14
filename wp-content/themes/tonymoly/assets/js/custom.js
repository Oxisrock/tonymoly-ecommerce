/********************************************************
 *
 * Custom Javascript code for Flexor Bootstrap theme
 *
 *******************************************************/
$(document).ready(function() {
  $('.plus').click(function() {
    var paymentTot = $ ('.s').val();
        paymentTot = paymentTot + paymentTot;
        console.log(paymentTot);
  });
  $('.menus').click(function() {
    alert( "Handler for .click() called." );
  });
});

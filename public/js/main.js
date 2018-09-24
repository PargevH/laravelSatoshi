
//modal
$('#myModal').modal('show');

//css  animation
$(document).ready(function () {
    new WOW().init();
});



// add active class radio buttons
$('#myCheckbox').on('click', '.radioButtons', function (e) {
    event.preventDefault(e);

    $('#myCheckbox  .radioButtons.active').removeClass('active');

    $(this).find('.checkContainer  input[type=radio]').attr("checked", true);
    $(this).css("margin-bottom", "unset")

    $(this).addClass('active');

});


// $(".checkContainer :input").click(function () {
//     $(".checkContainer :input").each(function() {
//         if ($(this).is(":checked")) {
//             $(".radioButtons" + $(this).attr("id")).addClass("active");
//         } else {
//             $(".radioButtons" + $(this).attr("id")).removeClass("active");
//         }
//     });
// });



$("#myCheckbox li").click(function (e) {

    event.preventDefault(e);

    $(this).find(".dropdown_text").toggle(200);

    $(this).find('.second_dropdown_button').click(function () {

        $(this).next().toggle(200);

        event.stopPropagation();
    })
});





//second dropdown
// $("#myCheckbox > li").click(function (e) {
//
//     event.preventDefault(e);
//
//     $(this).find(".dropdown_text").toggle(200);
//
//     $(this).find('.second_dropdown_button').click(function () {
//
//         $("#second_dropdown").toggle(200);
//
//         event.stopPropagation();
//     })
// });








// $(document).ready(function(){
//     $('.dropdown-submenu a.test').on("click", function(e){
//         $(this).next('ul').toggle();
//         e.stopPropagation();
//         e.preventDefault();
//     });
//
//     $("#dropdown_text").on(click, function () {
//         // $("#second_dropdown").show(200)
//         $('#second_dropdown').toggle();
//     })
// });




$(document).ready(function(){

    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });

});






// js payments
// var $form = $('#payment-form');
// $form.find('.subscribe').on('click', payWithStripe);
//
// /* If you're using Stripe for payments */
// function payWithStripe(e) {
//     e.preventDefault();
//
//     /* Abort if invalid form data */
//     if (!validator.form()) {
//         return;
//     }
//
//     /* Visual feedback */
//     $form.find('.subscribe').html('Validating <i class="fa fa-spinner fa-pulse"></i>').prop('disabled', true);
//
//     var PublishableKey = 'pk_test_6pRNASCoBOKtIshFeQd4XMUh'; // Replace with your API publishable key
//     Stripe.setPublishableKey(PublishableKey);
//
//     /* Create token */
//     var expiry = $form.find('[name=cardExpiry]').payment('cardExpiryVal');
//     var ccData = {
//         number: $form.find('[name=cardNumber]').val().replace(/\s/g,''),
//         cvc: $form.find('[name=cardCVC]').val(),
//         exp_month: expiry.month,
//         exp_year: expiry.year
//     };
//
//     Stripe.card.createToken(ccData, function stripeResponseHandler(status, response) {
//         if (response.error) {
//             /* Visual feedback */
//             $form.find('.subscribe').html('Try again').prop('disabled', false);
//             /* Show Stripe errors on the form */
//             $form.find('.payment-errors').text(response.error.message);
//             $form.find('.payment-errors').closest('.row').show();
//         } else {
//             /* Visual feedback */
//             $form.find('.subscribe').html('Processing <i class="fa fa-spinner fa-pulse"></i>');
//             /* Hide Stripe errors on the form */
//             $form.find('.payment-errors').closest('.row').hide();
//             $form.find('.payment-errors').text("");
//             // response contains id and card, which contains additional card details
//             console.log(response.id);
//             console.log(response.card);
//             var token = response.id;
//             // AJAX - you would send 'token' to your server here.
//             $.post('/account/stripe_card_token', {
//                 token: token
//             })
//             // Assign handlers immediately after making the request,
//                 .done(function(data, textStatus, jqXHR) {
//                     $form.find('.subscribe').html('Payment successful <i class="fa fa-check"></i>');
//                 })
//                 .fail(function(jqXHR, textStatus, errorThrown) {
//                     $form.find('.subscribe').html('There was a problem').removeClass('success').addClass('error');
//                     /* Show Stripe errors on the form */
//                     $form.find('.payment-errors').text('Try refreshing the page and trying again.');
//                     $form.find('.payment-errors').closest('.row').show();
//                 });
//         }
//     });
// }
// /* Fancy restrictive input formatting via jQuery.payment library*/
// $('input[name=cardNumber]').payment('formatCardNumber');
// $('input[name=cardCVC]').payment('formatCardCVC');
// $('input[name=cardExpiry').payment('formatCardExpiry');
//
// /* Form validation using Stripe client-side validation helpers */
// jQuery.validator.addMethod("cardNumber", function(value, element) {
//     return this.optional(element) || Stripe.card.validateCardNumber(value);
// }, "Please specify a valid credit card number.");
//
// jQuery.validator.addMethod("cardExpiry", function(value, element) {
//     /* Parsing month/year uses jQuery.payment library */
//     value = $.payment.cardExpiryVal(value);
//     return this.optional(element) || Stripe.card.validateExpiry(value.month, value.year);
// }, "Invalid expiration date.");
//
// jQuery.validator.addMethod("cardCVC", function(value, element) {
//     return this.optional(element) || Stripe.card.validateCVC(value);
// }, "Invalid CVC.");
//
// validator = $form.validate({
//     rules: {
//         cardNumber: {
//             required: true,
//             cardNumber: true
//         },
//         cardExpiry: {
//             required: true,
//             cardExpiry: true
//         },
//         cardCVC: {
//             required: true,
//             cardCVC: true
//         }
//     },
//     highlight: function(element) {
//         $(element).closest('.form-control').removeClass('success').addClass('error');
//     },
//     unhighlight: function(element) {
//         $(element).closest('.form-control').removeClass('error').addClass('success');
//     },
//     errorPlacement: function(error, element) {
//         $(element).closest('.form-group').append(error);
//     }
// });
//
// paymentFormReady = function() {
//     if ($form.find('[name=cardNumber]').hasClass("success") &&
//         $form.find('[name=cardExpiry]').hasClass("success") &&
//         $form.find('[name=cardCVC]').val().length > 1) {
//         return true;
//     } else {
//         return false;
//     }
// }
//
// $form.find('.subscribe').prop('disabled', true);
// var readyInterval = setInterval(function() {
//     if (paymentFormReady()) {
//         $form.find('.subscribe').prop('disabled', false);
//         clearInterval(readyInterval);
//     }
// }, 250);
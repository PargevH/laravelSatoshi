
$('#myCheckbox').on('click', '.radioButtons', function() {
    $('#myCheckbox .radioButtons.active').removeClass('active');
    $('#myCheckbox .radioButtons.active .checkContainer').css("color", "white");
    $(this).addClass('active');
});


$('#myModal').modal('show');

$(document).ready(function () {
    new WOW().init();
});


$('a[href^="#"]').click(function () {
    var target = $(this).attr('href');
    $('html, body').animate({scrollTop: $(target).offset().top }, 800);
    return false;
});



$("#myCheckbox li").click(function () {
    $(this).find(".dropdown_text").toggle(200);;
});


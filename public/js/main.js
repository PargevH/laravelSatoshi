
//modal
$('#myModal').modal('show');

$(document).ready(function () {
    new WOW().init();
});


$('input[type="radio"]').click(

    function () {
        $('input[type="radio"]').attr("checked", false);
        $(this).attr("checked", true);
        $(this).parents("#myCheckbox").find('.radioButtons').removeClass("active")
        $(this).parent().parent().addClass("active");
    }
);


$("a.scroll").click(function() {
    $('html,body').animate({
            scrollTop: $("#contact").offset().top},
        'slow');
});

$(document).ready(function(){

    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });

});



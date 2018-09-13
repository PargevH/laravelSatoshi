
$('#myCheckbox').on('click', 'li', function() {
    $('#myCheckbox li.active').removeClass('active');
    $(this).addClass('active');
});


$('#myModal').modal('show');

$(document).ready(function () {
    new WOW().init();
});
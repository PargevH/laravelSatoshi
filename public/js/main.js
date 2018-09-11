
$('#myCheckbox').on('click', 'li', function() {
    $('#myCheckbox li.active').removeClass('active');
    $(this).addClass('active');
});

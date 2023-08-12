
$('.repwd').on('focus', function () {
    $('.authicon').removeClass('d-none');
});

if($('input[name="email"]').val()) {
    $('#btnAccount').prop('disabled', false);
};




$('form').on('keyup', function () {
    if($('input[name="email"]').val()&& $('input[name="name"]').val() && $('input[name="phone"]').val() && $('input[name="birthday"]').val() && ($('input[name="pwd"]').val() == $('input[name="repwd"]').val()) && $('input[name="pwd"]').val() && $('input[name="repwd"]').val()) {
        $('#btnAccount').prop('disabled', false);
    } else {
        $('#btnAccount').prop('disabled', true);
    }
});

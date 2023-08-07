$('.showcart').click(function (e) {
    $('.cart-container').toggleClass('d-none');
});

$('.cart-ic').on('mouseover', function () {
    $('.cart-ic').css('cursor', 'pointer');
});

$('.showtoy').on('mouseenter', function () {
    $('.blind-container').removeClass('d-flex');
    $('.blind-container').addClass('d-none');
    $('.toy-container').removeClass('d-none');
    $('.toy-container').addClass('d-flex');
    $('.toy-text').css('border-color', 'white');
    $('.blind-text').css('border-color', 'transparent');
});

$('.toy-container').on('mouseleave', function () {
    $('.toy-container').addClass('d-none');
    $('.toy-container').removeClass('d-flex');
    $('.toy-text').css('border-color', 'transparent');
});


$('.showblind').on('mouseenter', function () {
    $('.toy-container').addClass('d-none');
    $('.toy-container').removeClass('d-flex');
    $('.blind-container').removeClass('d-none');
    $('.blind-container').addClass('d-flex');
    $('.blind-text').css('border-color', 'white');
    $('.toy-text').css('border-color', 'transparent');
});

$('.blind-container').on('mouseleave', function () {
    $('.blind-container').removeClass('d-flex');
    $('.blind-container').addClass('d-none');
    $('.blind-text').css('border-color', 'transparent');
});

$('.checkout-btn').on('mouseenter', function () {
    $('.checkout-btn').css('cursor', 'pointer');
});

$('.removeproduct').on('mouseenter', function () {
    $('.trashcan-ic').attr('fill', 'red');
});

$('.removeproduct').on('mouseleave', function () {
    $('.trashcan-ic').removeAttr('fill');
});





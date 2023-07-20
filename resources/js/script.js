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
    $('.new-detail').removeClass('d-none');
    $('.new-list').addClass('color_red');
});

$('.toy-container').on('mouseleave', function () {
    $('.toy-container').addClass('d-none');
    $('.toy-container').removeClass('d-flex');
    $('.toy-text').css('border-color', 'transparent');
    $('.toy-container > div > div:gt(1)').addClass('d-none');
    $('.blind-container > div > div:gt(1)').addClass('d-none');
    $('.toy-container > div > div > ul > li').removeClass('color_red');
    $('.blind-container > div > div > ul > li').removeClass('color_red');
});


$('.showblind').on('mouseenter', function () {
    $('.toy-container').addClass('d-none');
    $('.toy-container').removeClass('d-flex');
    $('.blind-container').removeClass('d-none');
    $('.blind-container').addClass('d-flex');
    $('.blind-text').css('border-color', 'white');
    $('.toy-text').css('border-color', 'transparent');
    $('.new-detail').removeClass('d-none');
    $('.new-list').addClass('color_red');
});

$('.blind-container').on('mouseleave', function () {
    $('.blind-container').removeClass('d-flex');
    $('.blind-container').addClass('d-none');
    $('.blind-text').css('border-color', 'transparent');
    $('.toy-container > div > div:gt(0)').addClass('d-none');
    $('.blind-container > div > div:gt(0)').addClass('d-none');
    $('.toy-container > div > div > ul > li').removeClass('color_red');
    $('.blind-container > div > div > ul > li').removeClass('color_red');
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


$('.show-pro-intro').on('click', function () {
    $('.pro-intro').toggleClass('d-none');
});


$('.new-list').on('mouseenter', function () {
    $('.new-detail').removeClass('d-none');
    $('.new-list').addClass('color_red');
    $('.hot-detail').addClass('d-none');
    $('.hot-list').removeClass('color_red');
    $('.series-detail').addClass('d-none');
    $('.series-list').removeClass('color_red');
});
$('.hot-list').on('mouseenter', function () {
    $('.hot-detail').removeClass('d-none');
    $('.hot-list').addClass('color_red');
    $('.new-detail').addClass('d-none');
    $('.new-list').removeClass('color_red');
    $('.series-detail').addClass('d-none');
    $('.series-list').removeClass('color_red');
});
$('.series-list').on('mouseenter', function () {
    $('.series-detail').removeClass('d-none');
    $('.series-list').addClass('color_red');
    $('.new-detail').addClass('d-none');
    $('.new-list').removeClass('color_red');
    $('.hot-detail').addClass('d-none');
    $('.hot-list').removeClass('color_red');
});

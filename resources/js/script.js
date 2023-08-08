$('.showcart').click(function (e) {
    if ($('.cart-container').hasClass('d-none')) {
        $('.cart-container').empty();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "GET",
            url: "/navcart",
            success: function (response) {
                if (response) {
                    response.forEach(element => {
                        let content = `<div class="cartitem d-flex p-3 m-3">
            <div class="col-4 pe-3 d-flex"><img class="img-fluid my-auto" src="../${element.head_photo}" alt=""></div>
            <div class="col-8 position-relative">
              <p>線上抽盲盒</p>
              <p>${element.name}</p>
              <p class="color_red">${element.price} x ${element.quantity}</p>
              <a class="position-absolute end-0 bottom-0 removeproduct" style="z-index: 100;" cid = "${element.cid}">
                <svg class="trashcan-ic"
                xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 -960 960 960" width="1.5em">
                <path
                    d="M261-120q-24.75 0-42.375-17.625T201-180v-570h-41v-60h188v-30h264v30h188v60h-41v570q0 24-18 42t-42 18H261Zm438-630H261v570h438v-570ZM367-266h60v-399h-60v399Zm166 0h60v-399h-60v399ZM261-750v570-570Z" />
                </svg>
              </a>
            </div>
        </div>`;
                        $('.cart-container').append(content);
                    });
                    $('.cart-container').append(`<div class="d-flex checkout-btn justify-content-center py-2">
                    <h5 class="my-auto">訂單結帳</h4>
                </div>`);
                    $('.cart-container').removeClass('d-none');
                    $('.removeproduct').on('click', function (e) {
                        // const csrfToken = document.getElementsByName('csrf-token');
                        let cid = $(this).attr('cid');
                        let kono = $(this).parents('.cartitem');
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: "DELETE",
                            url: `/removecartitem/${cid}`,
                            success: function (response) {
                                kono.remove();
                            }
                        });
                    });
                } else {
                    window.location.href = '/login';
                }

            }
        });
    } else {
        $('.cart-container').addClass('d-none');
    }


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

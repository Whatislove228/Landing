if ($(window).width() < 769) {
    var isMobile = true;
} else  {
    var isMobile = false;
}
$(document).ready(function () {
   if(!isMobile) {
        $('#fullpage').pagepiling({
            menu: '#navigation',
            direction: 'vertical',
            verticalCentered: true,
            sectionsColor: [],
            anchors: ['first', 'about', 'consalt','about-project','course','ex','section7','insta','contacts'],
            scrollingSpeed: 700,
            easing: 'swing',
            loopBottom: false,
            loopTop: false,
            css3: true,
            navigation: {
                'textColor': '#000',
                'bulletsColor': '#000',
                'position': 'right',
                'tooltips': ['Обо мне', 'О проекте', 'Консультации', 'section4','section5','section6','section7','section8','section9']
            },
            normalScrollElementTouchThreshold: 3,
            touchSensitivity: 3,
            keyboardScrolling: true,
            sectionSelector: '.section',
            animateAnchor: true,
            normalScrollElements: '.scroll_sec'
        });
    } else {
        makeCssDiff();
    }
});
var owl = $(".owl-carousel");
$(function() {
    if(!isMobile) {
        owl.owlCarousel({
            items: 3,
            margin: 30,
            // center: true,
            nav: true,
        });
    }
});

function menuToggle() {
   $('.navbar').toggleClass('background-menu-color');
   $('#navigation').toggleClass('h-100vh');
    let newsrc = ($('.menu-icon-image').attr('src') == 'layouts/img/menu.svg') ? 'layouts/img/menu-close.svg' : 'layouts/img/menu.svg';
    $('.menu-icon-image').attr('src', newsrc );
}
function showMore() {
    $(this).next('.show-more-text').toggle('show');
    $(this).find('.drop-arrow').toggleClass('rotate');
}
function menuTogglePopup() {
    if(!isMobile) {
        $('#main-head-buy').attr('placeholder', $(this).data('head'));
        $('#main-head-buy').val($(this).data('head'));
        $('.buy-popup').show();
    } else {
        $('#main-head-buy-mobile').attr('placeholder', $(this).data('head'));
        $('#main-head-buy-mobile').val($(this).data('head'));
        $('.buy-popup-fixed').show();
    }

}
function menuTogglePopupClose() {
    $('.buy-popup').hide();

}
function menuTogglePopupCloseMobile() {
    $('.buy-popup-fixed').hide();
    $('.success-popup-mobile').hide();
}
function closeSuccess() {
    $('.success-popup').hide('slow');
    $('.buy-popup').hide();
}
function closePopup() {
   let id =  $(this).data('toggle');
   $(id).toggle('fast');
}

$('.navbar-collapse ul li a').click(function(){
    console.log(isMobile);
    if(isMobile) {
        $('.navbar-toggler').click();
        menuToggle();
    }
});
function makeCssDiff() {
    $('.mobile-diff').css('height','auto')
}
$('.next').on('click',function () {
    owl.trigger('next.owl.carousel')
});
$('.prev').on('click', function () {
    owl.trigger('prev.owl.carousel')
});
$('.buy-button').on('click',menuTogglePopup);
$('.close-success-popup').on('click',closeSuccess);
$('.close-buy-popup').on('click',menuTogglePopupClose);
$('.close-buy-popup-mobile').on('click',menuTogglePopupCloseMobile);
$('.menu-icon').on('click',menuToggle);
$('.show-more').on('click',showMore);
$('.ajax-form-submit').on('submit',Mail);
if(!isMobile) {
    $('.toggle-popup').on('click', closePopup);
}
function Mail() {
    let data = $(this).serializeArray();
    console.log(data);
    // $('input').css('border-bottom','1px solid rgba(220,71,24,0.4)');
    // if(data[0].value != '' && data[1].value != '') {
        $.ajax({
            url: '/ajax/mail.php',
            type: 'POST',
            dataType: 'html',
            data: data,
            success: function (e) {
                console.log(isMobile);
                if(!isMobile) {
                    $('.success-popup').show();
                } else {
                    $('.success-popup-mobile').show();
                }
            }
        });
    // }
    return false;
}

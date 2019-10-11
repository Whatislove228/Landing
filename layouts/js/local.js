if ($(window).width() <= 768) {
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
            anchors: ['first', 'about', 'consalt'],
            scrollingSpeed: 700,
            easing: 'swing',
            loopBottom: false,
            loopTop: false,
            css3: true,
            navigation: {
                'textColor': '#000',
                'bulletsColor': '#000',
                'position': 'right',
                'tooltips': ['Обо мне', 'О проекте', 'Консультации', 'section4']
            },
            normalScrollElements: null,
            normalScrollElementTouchThreshold: 5,
            touchSensitivity: 5,
            keyboardScrolling: true,
            sectionSelector: '.section',
            animateAnchor: false,
        });
    } else {
        makeCssDiff();
    }

});

function menuToggle() {
   $('.navbar').toggleClass('background-menu-color');
   $('#navigation').toggleClass('h-100vh');
    let newsrc = ($('.menu-icon-image').attr('src') == 'layouts/img/menu.png') ? 'layouts/img/menu-close.png' : 'layouts/img/menu.png';
    $('.menu-icon-image').attr('src', newsrc );

}

$('.menu-icon').on('click',menuToggle);

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
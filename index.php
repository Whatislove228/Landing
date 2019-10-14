<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="layouts/css/style.css">
    <script>
        console.log(screen.width);
        if (screen.width > 769) {
            document.write('<link rel="stylesheet" href="layouts/css/jquery.pagepiling.css">');
        }
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Лендинг</title>
</head>

<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark">
    <a class="navbar-brand ml-0 ml-sm-5 " href="#"><img src="layouts/img/logo.svg" alt=""></a>
    <button class="navbar-toggler" style="border: 0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="menu-icon"><img style="width: 20px" class="menu-icon-image" src="layouts/img/menu.svg" alt=""></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul id="navigation" class="navbar-nav" style="margin: 0 auto">
            <li data-menuanchor="about" class="nav-item active ml-0 ml-lg-3" >
                <a class="nav-link text-white text-uppercase" data-href="#about" href="#about">Обо мне <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active ml-0 ml-lg-3" >
                <a class="nav-link text-white text-uppercase" data-href="#first" href="#about-project">О проекте <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ml-0 ml-lg-3">
                <a class="nav-link text-white text-uppercase " data-href="#course" href="#course">Курсы</a>
            </li>
            <li class="nav-item ml-0 ml-lg-3">
                <a class="nav-link text-white text-uppercase" href="#ex">Екскурсии</a>
            </li>
            <li class="nav-item text-white ml-0 ml-lg-3">
                <a class="nav-link text-white text-uppercase" href="#insta">Инстаграм</a>
            </li>
            <li class="nav-item ml-0 ml-lg-3">
                <a class="nav-link text-white text-uppercase" href="#contacts">Контакты</a>
            </li>
            <li class="nav-item mt-5 mt-sm-0 ml-0 ml-xl-3">
                <a class="nav-link text-white text-uppercase ml-lg-5 ml-xl-5 pt-5 pt-sm-0" href="tel:+7(925)1010012"><h4><img class="mr-2" src="layouts/img/WhatsApp.svg" alt="WhatsApp">+7 (925) 101 00 12</h4></a>
            </li>
        </ul>
    </div>
</nav>
<div id="fullpage">
    <?php include ('include/first.php') ?>
    <?php include ('include/second.php') ?>
    <?php include ('include/third.php') ?>
    <?php include ('include/fourth.php') ?>
    <?php include ('include/fifth.php') ?>
    <?php include ('include/six.php') ?>
    <?php include ('include/seven.php') ?>
    <?php include ('include/eight.php') ?>
    <?php include ('include/nine.php') ?>
    <div class="col-5 success-popup position-fixed" style="z-index: 99999">
        <div class="col-12 text-right mt-3"><img class="close-success-popup" src="layouts/img/close-popup.svg" alt=""></div>
        <div class="row pl-4 pr-4 pb-4 pt-2 mx-auto">
            <p style="font-size: 20px;width: 100%" class="main-color head-buy mx-auto">Спасибо за заявку!</p>
            <p style="width: 100%" class="text-white text-center">Я свяжусь с Вами
                в ближайшее время</p>
            <img src="layouts/img/success.svg" class="mx-auto" alt="">
        </div>
    </div>
    <div class="col-12 success-popup-mobile position-fixed h-100" style="z-index: 9999">
        <div class="row">
            <div class="col-6 mt-2"><img src="layouts/img/logo.svg" alt=""></div>
            <div class="col-6 text-right mt-3"><img class="close-buy-popup-mobile" src="layouts/img/menu-close.svg" alt=""></div>
        </div>
        <div class="row nomargin">
            <div class="row pl-4 pr-4 pb-4 pt-2 mx-auto">
                <p style="font-size: 20px;width: 100%" class="main-color head-buy mx-auto">Спасибо за заявку!</p>
                <p style="width: 100%" class="text-white text-center">Я свяжусь с Вами
                    в ближайшее время</p>
                <img src="layouts/img/success.svg" class="mx-auto" alt="">
            </div>
            <a class="nav-link text-white mx-auto text-uppercase ml-lg-5 ml-xl-5 pt-5 pt-sm-0" href="tel:+79251010012"><h4><img class="mr-2" src="layouts/img/WhatsApp.png" alt="WhatsApp">+7 (925) 101 00 12</h4></a>
        </div>
    </div>
</div>

</body>


<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="layouts/js/jquery.pagepiling.js"></script>

<!--<script type="text/javascript" src="layouts/js/slick.js"></script>-->

<!-- js файлы плагина fullpage -->
<!--<script src="libs/bootstrap/js/bootstrap.js"></script>-->
<!--<script src="libs/fullpage/jquery.easings.min.js"></script>-->
<!--<script src="libs/fullpage/scrolloverflow.min.js"></script>-->
<!--<script src="libs/fullpage/jquery.fullPage.min.js"></script>-->
<script src="layouts/js/local.js"></script>


</html>

<?php
/**
 * Template Name: Home
 * Created by PhpStorm.
 * User: mustafakattan
 * Date: 2019-10-23
 * Time: 20:49
 */

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type='text/javascript' async src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
    <title>Inventionware</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.0-rc.3/dist/css/foundation.min.css"/>
    <link rel="stylesheet" href="<?= get_theme_file_uri('/css/style.css') ?>"/>
    <link rel="stylesheet" href="<?= get_theme_file_uri('/css/test.css') ?>"/>
    <script src="<?= get_theme_file_uri('js/script.js') ?>"></script>
    <script src="<?= get_theme_file_uri('assets/jquery-3.3.1.min.js') ?>"></script>
</head>
<body>
<?= get_header();?>
<div class="grid">
    <div class="grid-x grid-padding-x">
        <div class="medium-12 ">
            <div class="padding-hoogte"></div>
        </div>
        <div class="medium-12  ">
            <div class="background-colores-bar">
                <div class="wrap-content-bar">
                    <h1>BARBERSHOP</h1>
                    <h4>BARBERS<s>&</s>BRATHERS</h4>
                </div>
                <div class="wrap-content-bar">
                    Welkom bij Barbershop Barbers&brathers aan de Vrijstraat 15 in Eindhoven. Wij zijn er voor jong en oud en staan van dinsdag tot en met zondag voor je klaar met ons enthousiaste en ervaren team. Je kunt een afspraak plannen door te bellen of wandel gerust eens bij ons binnen.
                </div>
            </div>
        </div>

        <div class="medium-12 ">
            <div class="padding-hoogte"></div>
        </div>
        <div class="medium-12 ">
            <div class="background-colores-bar">

                <div class="wrap-content-bar_itmes">
                    PROFESSIONEEL & GETRAIND
                </div>
                <div class="wrap-content-bar">
                    Ons team is jarenlang ervaren op het gebied van knippen, voor kort en lang haar. Door de klant zekerheid en kwaliteit te bieden geven wij wat er van ons verwacht wordt. Kom eens gezellig langs en maak kennis!
                </div>
           </div>
        </div>
    </div>
</div>
<div class="wrap-content-bar_itmes">
    Onze Team
</div>




<div class="slideshow-container">
    <div class="mySlides fade">
        <div class="numbertext">1 / 5</div>
        <img src="https://www.w3schools.com/howto/img_fjords_wide.jpg" style="width:100%">
        <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 5</div>
        <img src="https://www.w3schools.com/howto/img_mountains_wide.jpg" style="width:100%">
        <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 5</div>
        <img src="https://www.w3schools.com/howto/img_nature_wide.jpg">
        <div class="text">Caption Three</div>
    </div>
    <div class="mySlides fade">
        <div class="numbertext">4 / 5</div>
        <img src="https://www.w3schools.com/howto/img_fjords_wide.jpg" style="width:100%">
        <div class="text">Caption Four</div>
    </div>
    <div class="mySlides fade">
        <div class="numbertext">5 / 5</div>
        <img src="https://www.w3schools.com/howto/img_nature_wide.jpg" style="width:100%">
        <div class="text">Caption Five</div>
    </div>
    <a class="prev" onclick="preSlides()">&#10094;</a>
    <a class="next" onclick="plusSlides()">&#10095;</a>
</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(this)"></span>
    <span class="dot" onclick="currentSlide(this)"></span>
    <span class="dot" onclick="currentSlide(this)"></span>
    <span class="dot" onclick="currentSlide(this)"></span>
    <span class="dot" onclick="currentSlide(this)"></span>
</div>
<?= get_footer();?>

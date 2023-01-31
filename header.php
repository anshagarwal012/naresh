<?php
require('admin/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="themeholder">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Page Title -->
    <title>Olive Venture Partners - <?= $heading ?></title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/nav.css">
</head>

<body>
    <!-- Main Content site -->
    <div class="main-site">
        <!--preloader  -->
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <!--/End preloader  -->

        <!-- Header Area Start-->
        <header class="sticky-header">
            <div class="container-fluid px-md-5">
                <div class="col">
                    <div class="toggle">
                        <a href="#" class="burger mt-3 js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
                            <span></span>
                        </a>
                    </div>
                    <aside class="sidebar">
                        <div class="side-inner">
                            <div class="nav-menu">
                                <ul>
                                    <li class="js-menu-toggle"><a href="#"><i class="fa fa-arrow-right"></a></i></li>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/whoweare">Who We Are</a></li>
                                    <li><a href="/team">Team</a></li>
                                    <li><a href="/services">Services</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                    <li><a href="/funding" target="_blank" class="olive">Apply for Funding</a></li>
                                    <li><a href="/lp" target="_blank" class="olive">Become an LP</a></li>
                                </ul>
                            </div>
                        </div>

                    </aside>
                </div>
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-2 my-auto">
                        <div class="logo">
                            <a href="/">
                                <img src="assets/svg/logo.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5 mt-auto">
                        <div class="main-menu">
                            <ul class="d-flex justify-content-between align-items-center">
                                <li><a href="/">Home</a></li>
                                <li><a href="/whoweare">Who We Are</a></li>
                                <li><a href="/team">Team</a></li>
                                <li><a href="/services">Services</a></li>
                                <li><a href="/contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3.5 mt-auto">
                        <div class="main-menu">
                            <ul class="d-flex justify-content-between align-items-center">
                                <li><a href="/funding" target="_blank" class="olive">Apply for Funding</a></li>
                                <li><a href="/lp" target="_blank" class="olive">Become an LP</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End!-->
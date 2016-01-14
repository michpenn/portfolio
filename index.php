<?php
session_start();
/**
 * Created by PhpStorm.
 * User: michpenn
 * Date: 12/4/15
 * Time: 10:01 AM
 */
?>

<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>

    <!-- ==============================================
    Title and Meta Tags
    =============================================== -->
    <meta charset="utf-8">
    <title>Michal Penn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta description="Site description">

    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="apple-touch-icon" href="assets/images/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/touch-icon-ipad-retina.png">

    <!-- ==============================================
    CSS
    =============================================== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/styles-orange.css">

    <!-- ==============================================
    Fonts
    =============================================== -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <!-- ==============================================
    JS
    =============================================== -->

    <!--[if lt IE 9]>
    <script src="assets/js/libs/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="assets/js/libs/modernizr.min.js"></script>
</head>

<body data-spy="scroll" data-target="#main-nav" data-offset="200">

<!--=== PAGE PRELOADER ===-->
<div id="page-loader"><span class="page-loader-gif"></span></div>


<!-- ==============================================
MAIN NAV
=============================================== -->
<div id="main-nav" class="navbar navbar-fixed-top">

    <div class="container">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-nav">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>

            <!--======= NAME ========-->
            <a class="navbar-brand" href="#home">Michal Penn</a>

        </div>

        <div id="site-nav" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="sr-only">
                    <a href="#home">Home</a>
                </li>
                <li>
                    <a href="#about"><i class="fa fa-user"></i> About Me</a>
                </li>
                <li>
                    <a href="#skills"><i class="fa fa-pie-chart"></i> Skills</a>
                </li>
                <li>
                    <a href="#portfolio"><i class="fa fa-th"></i> Works</a>
                </li>
                <li>
                    <a href="#contact"><i class="fa fa-comments-o"></i> Contact Me</a>
                </li>
            </ul>
        </div>

    </div>

</div><!--End main-nav -->

<!-- ==============================================
HEADER
=============================================== -->
<header id="home">
    <div class="container text-center">

        <div class="hello">
            <p>HELLO</p>
            <h1>I AM MICHAL PENN</h1>
            <p class="p2">AND</p>
            <H2>I AM A WEB DEVELOPER</H2>
        </div>

    </div>
</header><!--End home header -->

<!-- ==============================================
ABOUT
=============================================== -->
<section id="about" class="bg1">

    <div class="container">

        <div class="row">

            <div class="col-xs-12">
                <h1 class="big-text orange wow fadeInDown text-center">
                    <i class="fa fa-user"></i>
                    About Me
                </h1>
                <p class="about-text wow fadeInDown">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc imperdiet a purus sit amet elementum. Nulla accumsan lacus ut congue sagittis. Vestibulum eu viverra sapien. Maecenas porttitor varius ex, scelerisque rhoncus sapien. Morbi iaculis dapibus tortor. Aenean hendrerit orci sit amet risus tempus mollis. In vitae felis leo. Suspendisse potenti. Quisque ipsum leo, faucibus sed quam nec, ultrices vehicula neque.
                </p>
            </div>

            <!-- ==== PHOTO ==== -->
            <div class="col-sm-6">
                <div id="trigger1"></div>
                <div id="pin1" class="imageCont">
                    <img class="wow rollIn image" data-wow-offset="200" src="assets/images/about.jpg" alt="" />
                </div>
            </div>

            <!-- ==== TIMELINE ==== -->
            <div class="col-sm-6 timeline">
                <i id="timeline-top" class="fa fa-clock-o"></i>

                <div class="wow fadeInRight" data-wow-offset="200">
                    <i class="fa fa-smile-o wow swing" data-wow-offset="200" data-wow-delay="1s"></i>
                    <h3>1990.01.01.</h3>
                    <p>
                        <span>Born</span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, quam vel iaculis blandit, massa nisl laoreet ante, eu elementum elit odio ut nulla. In facilisis leo ac erat ultricies luctus id vel eros. Sed laoreet vitae massa a maximus.                            </p>
                </div>

                <div class="wow fadeInRight" data-wow-offset="200">
                    <i class="fa fa-book wow swing" data-wow-offset="200" data-wow-delay="1s"></i>
                    <h3>1996 - 2004</h3>
                    <p>
                        <span>Grade school</span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, quam vel iaculis blandit, massa nisl laoreet ante, eu elementum elit odio ut nulla. In facilisis leo ac erat ultricies luctus id vel eros. Sed laoreet vitae massa a maximus.                            </p>
                </div>

                <div class="wow fadeInRight" data-wow-offset="200">
                    <i class="fa fa-book wow swing" data-wow-offset="200" data-wow-delay="1s"></i>
                    <h3>2004 - 2008</h3>
                    <p>
                        <span>High school</span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, quam vel iaculis blandit, massa nisl laoreet ante, eu elementum elit odio ut nulla. In facilisis leo ac erat ultricies luctus id vel eros. Sed laoreet vitae massa a maximus.                            </p>
                </div>

                <div class="wow fadeInRight" data-wow-offset="200">
                    <i class="fa fa-university wow swing" data-wow-offset="200" data-wow-delay="1s"></i>
                    <h3>2008</h3>
                    <p>
                        <span>Starting University</span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, quam vel iaculis blandit, massa nisl laoreet ante, eu elementum elit odio ut nulla. In facilisis leo ac erat ultricies luctus id vel eros. Sed laoreet vitae massa a maximus.                            </p>
                </div>

                <div class="wow fadeInRight" data-wow-offset="200">
                    <i class="fa fa-trophy wow swing" data-wow-offset="200" data-wow-delay="1s"></i>
                    <h3>2010</h3>
                    <p>
                        <span>Best Designer Award</span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, quam vel iaculis blandit, massa nisl laoreet ante, eu elementum elit odio ut nulla. In facilisis leo ac erat ultricies luctus id vel eros. Sed laoreet vitae massa a maximus.                            </p>
                </div>

                <div class="wow fadeInRight" data-wow-offset="200">
                    <i class="fa fa-graduation-cap wow swing" data-wow-offset="200" data-wow-delay="1s"></i>
                    <h3>2013</h3>
                    <p>
                        <span>University of completion</span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, quam vel iaculis blandit, massa nisl laoreet ante, eu elementum elit odio ut nulla. In facilisis leo ac erat ultricies luctus id vel eros. Sed laoreet vitae massa a maximus.                            </p>
                </div>

                <div class="wow fadeInRight" data-wow-offset="200">
                    <i class="fa fa-briefcase wow swing" data-wow-offset="200" data-wow-delay="1s"></i>
                    <h3>2013 - 2014</h3>
                    <p>
                        <span>Work</span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, quam vel iaculis blandit, massa nisl laoreet ante, eu elementum elit odio ut nulla. In facilisis leo ac erat ultricies luctus id vel eros. Sed laoreet vitae massa a maximus.                            </p>
                </div>

                <div class="wow fadeInRight" data-wow-offset="200">
                    <i class="fa fa-search wow swing" data-wow-offset="200" data-wow-delay="1s"></i>
                    <h3>2014 -</h3>
                    <p>
                        <span>Freelancer</span>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis, quam vel iaculis blandit, massa nisl laoreet ante, eu elementum elit odio ut nulla. In facilisis leo ac erat ultricies luctus id vel eros. Sed laoreet vitae massa a maximus.                            </p>
                </div>

            </div>
        </div>

    </div>

</section><!--End about section -->


<!-- ==============================================
SKILLS
=============================================== -->
<section id="skills" class="bg2">

    <div class="container">

        <div class="row">

            <div class="col-xs-12">
                <h1 class="big-text wow fadeInDown text-center" data-wow-offset="100">
                    <i class="fa fa-pie-chart"></i>
                    My skills
                </h1>
            </div>

            <div class="col-md-3 col-sm-6 text-center">
                        <span class="chart" data-percent="90">
                            <span class="title">HTML 5</span>
                            <span class="percent"></span>
                        </span>
            </div>

            <div class="col-md-3 col-sm-6 text-center">
                        <span class="chart" data-percent="80">
                            <span class="title">CSS 3</span>
                            <span class="percent"></span>
                        </span>
            </div>

            <div class="col-md-3 col-sm-6 text-center">
                        <span class="chart" data-percent="60">
                            <span class="title">jQuery</span>
                            <span class="percent"></span>
                        </span>
            </div>

            <div class="col-md-3 col-sm-6 text-center">
                        <span class="chart" data-percent="70">
                            <span class="title">Photoshop</span>
                            <span class="percent"></span>
                        </span>
            </div>


            <!--Language-->

            <div class="col-lg-4 col-md-6 skill10 text-center">
                <p>English</p>
                <i class="fa fa-circle wow fadeInLeft" data-wow-delay="0s"></i>
                <i class="fa fa-circle wow fadeInLeft" data-wow-delay=".1s"></i>
                <i class="fa fa-circle wow fadeInLeft" data-wow-delay=".2s"></i>
                <i class="fa fa-circle wow fadeInLeft" data-wow-delay=".3s"></i>
                <i class="fa fa-circle wow fadeInLeft" data-wow-delay=".4s"></i>
                <i class="fa fa-circle wow fadeInLeft" data-wow-delay=".5s"></i>
                <i class="fa fa-circle wow fadeInLeft" data-wow-delay=".6s"></i>
                <i class="fa fa-circle wow fadeInLeft" data-wow-delay=".7s"></i>
                <i class="fa fa-circle-o wow fadeInLeft" data-wow-delay=".8s"></i>
                <i class="fa fa-circle-o wow fadeInLeft" data-wow-delay=".9s"></i>
            </div>

            <div class="col-lg-4 col-md-6 skill10 text-center">
                <p>Hebrew</p>
                <i class="fa fa-circle wow fadeInLeft" data-wow-delay="0s"></i>
                <i class="fa fa-circle wow fadeInLeft" data-wow-delay=".1s"></i>
                <i class="fa fa-circle wow fadeInLeft" data-wow-delay=".2s"></i>
                <i class="fa fa-circle wow fadeInLeft" data-wow-delay=".3s"></i>
                <i class="fa fa-circle wow fadeInLeft" data-wow-delay=".4s"></i>
                <i class="fa fa-circle-o wow fadeInLeft" data-wow-delay=".5s"></i>
                <i class="fa fa-circle-o wow fadeInLeft" data-wow-delay=".6s"></i>
                <i class="fa fa-circle-o wow fadeInLeft" data-wow-delay=".7s"></i>
                <i class="fa fa-circle-o wow fadeInLeft" data-wow-delay=".8s"></i>
                <i class="fa fa-circle-o wow fadeInLeft" data-wow-delay=".9s"></i>
            </div>

            <div class="col-lg-4 col-md-6 skill10 text-center">
                <p>Spanish</p>
                <i class="fa fa-circle wow fadeInLeft" data-wow-delay="0s"></i>
                <i class="fa fa-circle wow fadeInLeft" data-wow-delay=".1s"></i>
                <i class="fa fa-circle wow fadeInLeft" data-wow-delay=".2s"></i>
                <i class="fa fa-circle-o wow fadeInLeft" data-wow-delay=".3s"></i>
                <i class="fa fa-circle-o wow fadeInLeft" data-wow-delay=".4s"></i>
                <i class="fa fa-circle-o wow fadeInLeft" data-wow-delay=".5s"></i>
                <i class="fa fa-circle-o wow fadeInLeft" data-wow-delay=".6s"></i>
                <i class="fa fa-circle-o wow fadeInLeft" data-wow-delay=".7s"></i>
                <i class="fa fa-circle-o wow fadeInLeft" data-wow-delay=".8s"></i>
                <i class="fa fa-circle-o wow fadeInLeft" data-wow-delay=".9s"></i>
            </div>

        </div>

    </div>

</section><!--End skills section -->

<!-- ==============================================
PORTFOLIO
=============================================== -->
<section id="portfolio" class="">

    <div class="container">

        <h1 class="big-text orange wow fadeInDown text-center" data-wow-offset="100">
            <i class="fa fa-th"></i>
            My works
        </h1>

        <!--==== Portfolio Filters ====-->
        <div id="filter-works">
            <ul>
                <li class="active wow fadeInRight" data-wow-delay="0s">
                    <a href="#" data-filter="*">All</a>
                </li>
                <li class="wow fadeInRight" data-wow-delay=".3s">
                    <a href="#" data-filter=".logo">Logo</a>
                </li>
                <li class="wow fadeInRight" data-wow-delay=".6s">
                    <a href="#" data-filter=".webdesign">Web design</a>
                </li>
                <li class="wow fadeInRight" data-wow-delay=".9s">
                    <a href="#" data-filter=".photography">Photography</a>
                </li>
            </ul>
        </div><!--End portfolio filters -->

    </div>

    <div class="container masonry-wrapper">

        <div id="projects-container">

            <!-- ==== PROJECT ITEM ==== -->
            <article class="project-item webdesign" data-toggle="modal" data-target=".project-item-1">
                <img class="img-responsive project-image" src="assets/images/thumb.png"  alt=""><!--Project thumb -->
                <h2 class="project-title">Webdesign #1</h2><!--Project Title -->
            </article>

            <!--==== Project Modal ====-->
            <div class="modal fade project-item-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-times"></i>
</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title">Webdesign #1 <span>webdesign</span></h4><!--Modal Title, Subtitle -->
                            <img src="assets/images/project.jpg" alt="" />
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam elementum egestas lectus, in efficitur metus gravida eu. Duis molestie mauris id pharetra varius. Mauris aliquet ut eros ac iaculis. Duis sagittis faucibus mi sed rhoncus. Sed commodo magna quam, id cursus nibh congue ac. Phasellus sollicitudin orci sapien, id dignissim nulla dapibus id. Cras volutpat orci et nibh convallis, a auctor nisi sodales. Phasellus pulvinar non tellus nec posuere. Maecenas risus dui, interdum et nibh vel, iaculis porttitor purus. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==== END PROJECT ITEM ==== -->

            <!-- ==== PROJECT ITEM ==== -->
            <article class="project-item photography logo" data-toggle="modal" data-target=".project-item-2">
                <img class="img-responsive project-image" src="assets/images/thumb.png"  alt=""><!--Project thumb -->
                <h2 class="project-title">Photography, logo #1 </h2><!--Project Title -->
            </article>

            <!--==== Project Modal ====-->
            <div class="modal fade project-item-2">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-times"></i>
</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title">Photography, logo #1 <span>photography, logo</span></h4><!--Modal Title, Subtitle -->
                            <img src="assets/images/project.jpg" alt="" />
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam elementum egestas lectus, in efficitur metus gravida eu. Duis molestie mauris id pharetra varius. Mauris aliquet ut eros ac iaculis. Duis sagittis faucibus mi sed rhoncus. Sed commodo magna quam, id cursus nibh congue ac. Phasellus sollicitudin orci sapien, id dignissim nulla dapibus id. Cras volutpat orci et nibh convallis, a auctor nisi sodales. Phasellus pulvinar non tellus nec posuere. Maecenas risus dui, interdum et nibh vel, iaculis porttitor purus. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==== END PROJECT ITEM ==== -->

            <!-- ==== PROJECT ITEM ==== -->
            <article class="project-item photography logo" data-toggle="modal" data-target=".project-item-3">
                <img class="img-responsive project-image" src="assets/images/thumb.png"  alt=""><!--Project thumb -->
                <h2 class="project-title">Photography, logo #2</h2><!--Project Title -->
            </article>

            <!--==== Project Modal ====-->
            <div class="modal fade project-item-3">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-times"></i>
</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title">Photography, logo #2 <span>photography, logo</span></h4><!--Modal Title, Subtitle -->
                            <img src="assets/images/project.jpg" alt="" />
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam elementum egestas lectus, in efficitur metus gravida eu. Duis molestie mauris id pharetra varius. Mauris aliquet ut eros ac iaculis. Duis sagittis faucibus mi sed rhoncus. Sed commodo magna quam, id cursus nibh congue ac. Phasellus sollicitudin orci sapien, id dignissim nulla dapibus id. Cras volutpat orci et nibh convallis, a auctor nisi sodales. Phasellus pulvinar non tellus nec posuere. Maecenas risus dui, interdum et nibh vel, iaculis porttitor purus. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==== END PROJECT ITEM ==== -->

            <!-- ==== PROJECT ITEM ==== -->
            <article class="project-item webdesign" data-toggle="modal" data-target=".project-item-4">
                <img class="img-responsive project-image" src="assets/images/thumb.png"  alt=""><!--Project thumb -->
                <h2 class="project-title">Webdesign #2</h2><!--Project Title -->
            </article>

            <!--==== Project Modal ====-->
            <div class="modal fade project-item-4">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-times"></i>
</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title">Webdesign #2 <span>webdesign</span></h4><!--Modal Title, Subtitle -->
                            <img src="assets/images/project.jpg" alt="" />
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam elementum egestas lectus, in efficitur metus gravida eu. Duis molestie mauris id pharetra varius. Mauris aliquet ut eros ac iaculis. Duis sagittis faucibus mi sed rhoncus. Sed commodo magna quam, id cursus nibh congue ac. Phasellus sollicitudin orci sapien, id dignissim nulla dapibus id. Cras volutpat orci et nibh convallis, a auctor nisi sodales. Phasellus pulvinar non tellus nec posuere. Maecenas risus dui, interdum et nibh vel, iaculis porttitor purus. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==== END PROJECT ITEM ==== -->

            <!-- ==== PROJECT ITEM ==== -->
            <article class="project-item photography webdesign" data-toggle="modal" data-target=".project-item-5">
                <img class="img-responsive project-image" src="assets/images/thumb.png"  alt=""><!--Project thumb -->
                <h2 class="project-title">Photography, webdesign #1</h2><!--Project Title -->
            </article>

            <!--==== Project Modal ====-->
            <div class="modal fade project-item-5">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-times"></i>
</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title">Photography, webdesign #1 <span>photography, webdesign</span></h4><!--Modal Title, Subtitle -->
                            <img src="assets/images/project.jpg" alt="" />
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam elementum egestas lectus, in efficitur metus gravida eu. Duis molestie mauris id pharetra varius. Mauris aliquet ut eros ac iaculis. Duis sagittis faucibus mi sed rhoncus. Sed commodo magna quam, id cursus nibh congue ac. Phasellus sollicitudin orci sapien, id dignissim nulla dapibus id. Cras volutpat orci et nibh convallis, a auctor nisi sodales. Phasellus pulvinar non tellus nec posuere. Maecenas risus dui, interdum et nibh vel, iaculis porttitor purus. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==== END PROJECT ITEM ==== -->

            <!-- ==== PROJECT ITEM ==== -->
            <article class="project-item webdesign" data-toggle="modal" data-target=".project-item-6">
                <img class="img-responsive project-image" src="assets/images/thumb.png"  alt=""><!--Project thumb -->
                <h2 class="project-title">Webdesign #3</h2><!--Project Title -->
            </article>

            <!--==== Project Modal ====-->
            <div class="modal fade project-item-6">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-times"></i>
</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title">Webdesign #3 <span>webdesign</span></h4><!--Modal Title, Subtitle -->
                            <img src="assets/images/project.jpg" alt="" />
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam elementum egestas lectus, in efficitur metus gravida eu. Duis molestie mauris id pharetra varius. Mauris aliquet ut eros ac iaculis. Duis sagittis faucibus mi sed rhoncus. Sed commodo magna quam, id cursus nibh congue ac. Phasellus sollicitudin orci sapien, id dignissim nulla dapibus id. Cras volutpat orci et nibh convallis, a auctor nisi sodales. Phasellus pulvinar non tellus nec posuere. Maecenas risus dui, interdum et nibh vel, iaculis porttitor purus. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==== END PROJECT ITEM ==== -->

            <!-- ==== PROJECT ITEM ==== -->
            <article class="project-item photography logo" data-toggle="modal" data-target=".project-item-7">
                <img class="img-responsive project-image" src="assets/images/thumb.png"  alt=""><!--Project thumb -->
                <h2 class="project-title">Photography, logo #3</h2><!--Project Title -->
            </article>

            <!--==== Project Modal ====-->
            <div class="modal fade project-item-7">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-times"></i>
</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title">Photography, logo #3 <span>photography, logo</span></h4><!--Modal Title, Subtitle -->
                            <img src="assets/images/project.jpg" alt="" />
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam elementum egestas lectus, in efficitur metus gravida eu. Duis molestie mauris id pharetra varius. Mauris aliquet ut eros ac iaculis. Duis sagittis faucibus mi sed rhoncus. Sed commodo magna quam, id cursus nibh congue ac. Phasellus sollicitudin orci sapien, id dignissim nulla dapibus id. Cras volutpat orci et nibh convallis, a auctor nisi sodales. Phasellus pulvinar non tellus nec posuere. Maecenas risus dui, interdum et nibh vel, iaculis porttitor purus. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==== END PROJECT ITEM ==== -->

            <!-- ==== PROJECT ITEM ==== -->
            <article class="project-item logo webdesign" data-toggle="modal" data-target=".project-item-8">
                <img class="img-responsive project-image" src="assets/images/thumb.png"  alt=""><!--Project thumb -->
                <h2 class="project-title">Logo, webdesign #1</h2><!--Project Title -->
            </article>

            <!--==== Project Modal ====-->
            <div class="modal fade project-item-8">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-times"></i>
</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title">Logo, webdesign #1 <span>logo, webdesign</span></h4><!--Modal Title, Subtitle -->
                            <img src="assets/images/project.jpg" alt="" />
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam elementum egestas lectus, in efficitur metus gravida eu. Duis molestie mauris id pharetra varius. Mauris aliquet ut eros ac iaculis. Duis sagittis faucibus mi sed rhoncus. Sed commodo magna quam, id cursus nibh congue ac. Phasellus sollicitudin orci sapien, id dignissim nulla dapibus id. Cras volutpat orci et nibh convallis, a auctor nisi sodales. Phasellus pulvinar non tellus nec posuere. Maecenas risus dui, interdum et nibh vel, iaculis porttitor purus. </p>
                            <img class="width50" src="assets/images/project.jpg" alt="" />
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam elementum egestas lectus, in efficitur metus gravida eu. Duis molestie mauris id pharetra varius. Mauris aliquet ut eros ac iaculis. Duis sagittis faucibus mi sed rhoncus. Sed commodo magna quam, id cursus nibh congue ac. Phasellus sollicitudin orci sapien, id dignissim nulla dapibus id. Cras volutpat orci et nibh convallis, a auctor nisi sodales. Phasellus pulvinar non tellus nec posuere. Maecenas risus dui, interdum et nibh vel, iaculis porttitor purus. </p>
                            <img class="width100" src="assets/images/project.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==== END PROJECT ITEM ==== -->

            <!-- ==== PROJECT ITEM ==== -->
            <article class="project-item webdesign" data-toggle="modal" data-target=".project-item-9">
                <img class="img-responsive project-image" src="assets/images/thumb.png"  alt=""><!--Project thumb -->
                <h2 class="project-title">Webdesign #4</h2><!--Project Title -->
            </article>

            <!--==== Project Modal ====-->
            <div class="modal fade project-item-9">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-times"></i>
</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title">Webdesign #4 <span>webdesign</span></h4><!--Modal Title, Subtitle -->
                            <img src="assets/images/project.jpg" alt="" />
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam elementum egestas lectus, in efficitur metus gravida eu. Duis molestie mauris id pharetra varius. Mauris aliquet ut eros ac iaculis. Duis sagittis faucibus mi sed rhoncus. Sed commodo magna quam, id cursus nibh congue ac. Phasellus sollicitudin orci sapien, id dignissim nulla dapibus id. Cras volutpat orci et nibh convallis, a auctor nisi sodales. Phasellus pulvinar non tellus nec posuere. Maecenas risus dui, interdum et nibh vel, iaculis porttitor purus. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==== END PROJECT ITEM ==== -->

        </div><!-- End projects -->

    </div><!-- End container -->


</section><!-- End portfolio section -->

<!-- ==============================================
CONTACT
=============================================== -->
<section id="contact" class="">

    <div class="container">

        <div class="row">

            <div class="col-xs-12">
                <h1 class="big-text orange wow fadeInDown text-center" data-wow-offset="100">
                    <i class="fa fa-comments-o"></i>
                    Contact Me
                </h1>
            </div>

            <div class="clear"></div>

            <div class="col-md-6 text-right hidden-sm hidden-xs">

                <!-- MAP -->
                <div id="gmap" class="wow fadeInLeft" data-wow-offset="100"></div>

            </div>

            <!--=== Contact info ===-->
            <div class="col-md-6 contact-info">
                <p class="contact-text wow fadeInRight">
                I am looking for new opportunities that will allow me to put my web development skills to the test. If you think I may be a good fit, please feel free to contact me!
                </p>
                <ul class="contact-list">
                    <li class="wow fadeInRight" data-wow-delay="0s">
                        <a id="mapLink" target="_blank" href="">
                            <i class="fa fa-map-marker"></i>
                            Irvine, California
                        </a>
                    </li>
                    <li class="wow fadeInRight" data-wow-delay="0s">
                        <a href="tel:12345678910">
                            <i class="fa fa-phone"></i> 949 677 4005
                        </a>
                    </li>
                    <li class="wow fadeInRight" data-wow-delay="0s">
                        <a href="mailto:info@panacz-design.com">
                            <i class="fa fa-envelope"></i> michpenn91@gmail.com
                        </a>
                    </li>
                </ul>
            </div>
            <!--=== End Contact ===-->

        </div>

    </div>

</section><!--=== End Contact section ===-->

<!-- ==============================================
FOOTER
=============================================== -->

<footer id="main-footer">
    <!-- FOOTER MAP -->
    <div id="gmapMobil" class="hidden-lg hidden-md"></div>

    <!-- FOOTER Social -->
    <div class="container">
        <ul class="social">
            <li class="wow fadeInRight" data-wow-delay="0s"><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="wow fadeInRight" data-wow-delay=".3s"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="wow fadeInRight" data-wow-delay=".6s"><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li class="wow fadeInRight" data-wow-delay=".9s"><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
        <p>&copy; 2015 - All rights reserved </p>

    </div>

</footer><!--=== End Footer ===-->

<!-- ==============================================
SCRIPTS
=============================================== -->

<script src="assets/js/libs/jquery-1.11.3.min.js"></script>
<script src="assets/js/libs/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/jquery.easypiechart.min.js"></script>
<script src="assets/js/jquery.masonry.min.js"></script>
<script src="assets/js/wow.min.js"></script>

<script src="assets/js/jquery.scrollmagic.min.js"></script>

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>

<script src="assets/js/scripts.js"></script>

<script>
    new WOW().init();

    /*============================================
     Map
     ==============================================*/
    var mapPoint = {
        'lat': 33.687881,
        'lng': -117.791112,
        'zoom' : 11,
        'icon': 'assets/images/marker.png'
    };

</script>

</body>

</html>
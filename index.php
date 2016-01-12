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
<html>
<head>
    <title>Michal Penn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!--    TODO SET AN ICON-->
    <link href="//fonts.googleapis.com/css?family=Lato:700,300" rel="stylesheet" type="text/css">
    <link href="external_files/css/normalize.min.css" rel="stylesheet" type="text/css">
    <link href="external_files/css/style.lite.min.css" rel="stylesheet" type="text/css">
</head>
<body id="parent">
<div class="main-container">
    <!--    TODO PICK A LOGO-->
    <div class="header">
        <div class="clearfix">
            <div class="float-left logo">
                <h1>
                    <a href="#">
                        <img src="" alt=""/>
                    </a>
                </h1>
            </div>
            <!--    MENU-->
            <div class="float-right">
                <ul id="top-nav" class="slimmenu">
                    <li>
                        <a href="#" target="open-iframe">About</a>
                    </li>
                    <li>
                        <a href="#" target="open-iframe">Skills</a>
                    </li>
                    <li>
                        <a href="#" target="open-iframe">Experience</a>
                    </li>
                    <li>
                        <a href="#" target="open-iframe">Contact Me</a>
                    </li>

                    <li>
                        <a href="#">Follow Me On</a>
                        <ul>
                            <li>
                                <a href="#">Facebook</a>
                            </li>
                            <li>
                                <a href="#">Twitter</a>
                            </li>
                            <li>
                                <a href="#">Pinterest</a>
                            </li>
                            <li>
                                <a href="#">Instagram</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="fullscreen tooltip" title="Go Full Screen">
                            <span class="pictogram">&#xe801;</span>
                        </a>
                        <a href="#" class="fullscreenExit tooltip" title="Exit Full Screen">
                            <span class="pictogram">&#xe802;</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div id="freewall" class="free-wall">
            <div class="brick tint size11 cat-2">
                <img src="images/4538256461_96f9e70e9c_b.jpg" alt="number1" />
                <div class="overlay">
                    <h3 class="project-title">Your Project Title</h3>
                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="single-page-lite1.html" class="open-project" target="open-iframe">OPEN <span class="pictogram">&#xe803;</span></a>
                </div>
            </div>
            <div class="brick tint size11 cat-3">
                <img src="images/2310704408_361758fa28_b.jpg" alt="number2" />
                <div class="overlay">
                    <h3 class="project-title">Your Project Title</h3>
                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="single-page-lite2.html" class="open-project" target="open-iframe">OPEN <span class="pictogram">&#xe803;</span></a>
                </div>
            </div>
            <div class="brick tint size11 cat-2">
                <img src="images/3084871415_da49ab66ea_o.jpg" alt="number3" />
                <div class="overlay">
                    <h3 class="project-title">Your Project Title</h3>
                    <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="single-page-lite3.html" class="open-project" target="open-iframe">OPEN <span class="pictogram">&#xe803;</span></a>
                </div>
            </div>
        </div>
        <div class="brick size12 cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-speed="500" data-fixpos="0-3">
            <!-- Your slideshow images -->
            <img src="images/5226290116_1409794022_b.jpg" alt="number4" />
            <img src="images/8098729514_fa1919474d_b.jpg" alt="number5" />
            <img src="images/3919137679_dc05b59927.jpg" alt="number6" />
        </div>

        <div class="brick size11" data-fixpos="1-0">
            <div class="cover">
                <p>
                    <strong>Hello!</strong>
                </p>
                <p>Welcome to my portfolio. I'm Jane Doe, a 20-something photographer with passion for composition and beauty.</p>
                <p>Feel free to explore my works. And contact me for photo queries.</p>
                <p><?= $_SERVER['REMOTE_ADDR']; ?></p>
            </div>
        </div>
        <div class="brick tint size12 cat-3">
            <img src="images/4414454672_e91f887d34_o.jpg" alt="number7" />
            <div class="overlay">
                <h3 class="project-title">Your Project Title</h3>
                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="single-page-lite1.html" class="open-project" target="open-iframe">OPEN <span class="pictogram">&#xe803;</span></a>
            </div>
        </div>
        <div class="brick size11 cycle-slideshow client-number" data-cycle-fx="scrollHorz" data-cycle-speed="200" data-fixpos="1-2">
            <img src="images/3346647884_a47c71fd9a_o.jpg" alt="number8" />
            <img src="images/1452336320_483f721d3d_o.jpg" alt="number9" />
            <img src="images/4538256461_96f9e70e9c_b.jpg" alt="number10" />
            <img src="images/2310704408_361758fa28_b.jpg" alt="number11" />
            <div class="client">
                <div class="number">365</div>
                <div class="client-text">Happy Clients and Counting</div>
                <div class="client-text">
                    <a href="#">
                        <strong>BE ONE!</strong>
                    </a>
                </div>
            </div>
        </div>
        <div class="brick tint size11 cat-1">
            <img src="images/5171071313_e4c110ccb2_b.jpg" alt="number12" />
            <div class="overlay">
                <h3 class="project-title">Your Project Title</h3>
                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="single-page-lite2.html" class="open-project" target="open-iframe">OPEN <span class="pictogram">&#xe803;</span></a>
            </div>
        </div>

        <!-- This is the slideshow for text. Wrap your text inside div .cover -->
        <div class="brick size11 cycle-slideshow" data-cycle-fx="fade" data-cycle-speed="900" data-cycle-slides="> div" data-fixpos="2-2">
            <div class="cover">
                <h2>" Odipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in quis neque in neque sagittis scelerisque. Fusce quis quam mollis, varius diam at, tempus mi "</h2>
                <p>Vivamus dictum</p>
            </div>
            <div class="cover">
                <h2>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed quam facilisis, condimentum nibh eu, hendrerit purus. Ut ut malesuada odio, nec ultricies nisi "</h2>
                <p>Morbi tempor</p>
            </div>
            <div class="cover">
                <h2>" Suspendisse malesuada lacus nunc, eu sagittis arcu egestas non. Morbi tempor tempus lobortis. Aenean aliquet dui ipsum, eget ullamcorper nisl ornare ut. Suspendisse in vestibulum sapien "</h2>
                <p>consectetur</p>
            </div>
        </div>

        <div class="brick tint size11 cat-2">
            <img src="images/4171682579_91f75f9a6a_o.jpg" alt="number13" />
            <div class="overlay">
                <h3 class="project-title">Your Project Title</h3>
                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="single-page-lite1.html" class="open-project" target="open-iframe">OPEN <span class="pictogram">&#xe803;</span></a>
            </div>
        </div>
        <div class="brick tint size11 cat-1">
            <img src="images/1330348274_33c00c4886_o.jpg" alt="number14" />
            <div class="overlay">
                <h3 class="project-title">Your Project Title</h3>
                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="single-page-lite2.html" class="open-project" target="open-iframe">OPEN <span class="pictogram">&#xe803;</span></a>
            </div>
        </div>
        <div class="brick tint size21 cat-3">
            <img src="images/4613181397_78853da480_b.jpg" alt="number15" />
            <div class="overlay">
                <h3 class="project-title">Your Project Title</h3>
                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="single-page-lite1.html" class="open-project" target="open-iframe">OPEN <span class="pictogram">&#xe803;</span></a>
            </div>
        </div>
        <div class="brick tint size11 cat-1">
            <img src="images/261980228_495975b20b_o.jpg" alt="number16" />
            <div class="overlay">
                <h3 class="project-title">Your Project Title</h3>
                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="single-page-lite2.html" class="open-project" target="open-iframe">OPEN <span class="pictogram">&#xe803;</span></a>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="float-right copyright">
            <p>2015<strong>Michal Penn</strong>All rights reserved</p>
            </div>
        </div>


    </div>
    <!-- All links from this homepage will be opened in this iframe, to prevent fullscreen (if enabled) from exiting if the user clicked on a link. -->
    <iframe id="open-iframe" name="open-iframe"></iframe>

    <!-- Scripts -->
    <script type="text/javascript" src="external_files/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="external_files/js/freewall.min.js"></script>
    <script type="text/javascript" src="external_files/js/jquery.cycle2.min.js"></script>
    <script type="text/javascript" src="external_files/js/jquery.slimmenu.min.js"></script>
    <script type="text/javascript" src="external_files/js/custom-script.min.js"></script>
</body>
</html>

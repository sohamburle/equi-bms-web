<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home :: Bombay Metal Scene</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="fantastico Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
            Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <link href="css/fonts.css" rel='stylesheet' type='text/css'/>
    <script type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);
    function hideURLbar() {
        window.scrollTo(0, 1);
    } </script>
    <script async src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!---- start-smoth-scrolling---->
    <script async type="text/javascript" src="js/move-top.js"></script>
    <script async type="text/javascript" src="js/easing.js"></script>
    <script async type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!--start-smoth-scrolling-->
    <!--start-top-nav-script-->
    <script>
        $(function ($) {
            var pull = $('#pull');
            menu = $('nav ul');
            menuHeight = menu.height();
            $(pull).on('click', function (e) {
                e.preventDefault();
                menu.slideToggle();
            });
            $(window).resize(function () {
                var w = $(window).width();
                if (w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });
    </script>
    <!--End-top-nav-script-->
</head>
<body>
<!--start-header-->
<div class="header" id="home">
    <div class="container">
        <div class="head">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" alt="Bombay Metal Scene"/></a>
            </div>
            <div class="navigation">
                <span class="menu"></span>
                <ul class="navig">
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="work.html">Download</a></li>
                    <li><a href="./edit">Add/Edit In-app Data</a></li>
                    <li><a href="about.html">About</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- script-for-menu -->
<!-- script-for-menu -->
<script>
    $("span.menu").click(function () {
        $(" ul.navig").slideToggle("slow", function () {
        });
    });
</script>
<!-- script-for-menu -->
<!--start-banner-->
<div class="banner body_wrap">
    <div class="container">
        <div class="banner-main">
            <div class="col-md-5 banner-left">
                <img src="images/ph.png" alt=""/>
            </div>
            <div class="col-md-7 banner-right">
                <h1>We design fun</h1>
                <h2>Ut In Nulla Enim. Phasellus Molestie Magna Non Est Non Venenatis ut In Nulla Enim. Phasellus
                    Molestie.</h2>
                <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend
                    nibh porttitor. Ut in nulla enim. Phasellus molestie tempor. Suspendisse dictum feugiat.</p>
                <div class="b-btn">
                    <a href="#" class="download">Download Now</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--end-banner-->
<!--start-footer-->
<div class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-right">
                <ul>
                    <li><a href="#"><span class="fb"> </span></a></li>
                    <li><a href="#"><span class="twt"> </span></a></li>
                    <li><a href="#"><span class="gp"> </span></a></li>
                    <li><a href="#"><span class="in"> </span></a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>Copyright © 2015 <a href="http://equitharn.in/">equitharn.in</a></p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */

            $().UItoTop({easingType: 'easeOutQuart'});

        });
    </script>
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
<!--end-footer
.footer-right ul li a span:hover {
opacity: 0.4;
filter: alpha(opacity=40);
}-->
</body>
</html>

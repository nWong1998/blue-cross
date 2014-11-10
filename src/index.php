<?php
	//session_start();
	//$_SESSION["email"] = "test";
	//session_destroy();
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blue</title>
    <!--<link href="/stylesheets/screen.css" media="screen, projection" type="text/css" rel="stylesheet">
    <link href="/stylesheets/print.css" media="print" type="text/css" rel="stylesheet">-->
    <link href="build/css/blue.css" rel="stylesheet" type="text/css">
    <link href="build/css/hover.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel='stylesheet' type='text/css'>
    <link href="build/css/font-awesome.css" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>

    <!--
        add code from files in www directory
    -->

    <header>
        <div class="logBar">
            <?php include_once "../session/index.php"; ?>
        </div>
    </header>

    <div class="wrap">
        <div class="huge">
            <h1>Name is Jack</h1>
            <!--<button class="shadow-radial">Click</button>-->
        </div>

        <nav id="scroll">
            <div class="mobile-toggle"><a href=""><span>Toggle</span></a></div>
            <ul id="welcomeDiv">
                <li class="active" id="l1"><a href="">Home</a></li><!--
                --><li><a href="" id="l2">Misc.</a></li><!--
                --><li><a href="" id="l3">Social</a></li>
            </ul>

            <script type="text/javascript">
                var left = document.getElementById("scroll");
                var stop = (left.offsetTop - 60);

                window.onscroll = function (e) {
                    var scrollTop = (window.pageYOffset !== undefined)
                            ? window.pageYOffset : (document.documentElement || document.body.parentNode ||
                    document.body).scrollTop;

                    if (scrollTop >= stop) {
                        left.className = 'stick';
                    } else {
                        left.className = '';
                    }

                }
            </script>

        </nav>

        <div class="contentArea">
            <div class="content">

            </div>
        </div>

    </div>

    <a href="" class="back-to-top">Back to Top</a>

    <script>

        jQuery(document).ready(function() {
            var offset = 220;
            var duration = 500;

            jQuery(window).scroll(function() {
                if (jQuery(this).scrollTop() > offset) {
                    jQuery('.back-to-top').fadeIn(duration);
                } else {
                    jQuery('.back-to-top').fadeOut(duration);
                }
            });

            jQuery('.back-to-top').click(function(event) {
                event.preventDefault();
                jQuery('html, body').animate({scrollTop: 0}, duration);
                return false;
            })
        });

    </script>

    <footer>
        <h1>&amp; Stuff</h1>
    </footer>

</body>
</html>
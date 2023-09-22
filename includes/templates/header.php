<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <title>londontechweek</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <link rel="manifest" href="site.webmanifest" />
    <link rel="apple-touch-icon" href="icon.png" />
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Oswald:wght@400;700&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet" />

    <?php
    $file = basename($_SERVER['PHP_SELF']);
    $page = str_replace(".php", "", $file);
    if ($page == 'guests' || $page == 'index') {
        echo '<link rel="stylesheet" href="css/colorbox.css">';
    } elseif ($page == 'conferences') {
        echo '<link rel="stylesheet" href="css/lightbox.css">';
    }
    ?>
    <link rel="stylesheet" href="css/main.css" />
    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    <meta name="theme-color" content="#fafafa" />
    <script id="mcjs">
        ! function(c, h, i, m, p) {
            m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m, p)
        }(document, "script", "https://chimpstatic.com/mcjs-connected/js/users/ae587f292e937e86e6ed5f40f/ff7ee17c3997caaa67a9cc0a0.js");
    </script>
</head>
<?php header('Content-Type: text/html; charset=utf-8'); ?>

<body class="<?php echo $page; ?>">
    <!-- Add your site or application content here -->

    <header class="site-header">
        <div class="hero">
            <div class="header-content">
                <nav class="social-media">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </nav>

                <div class="event-information">
                    <div class="clearfix">
                        <p class="date"><i class="far fa-calendar-alt"></i> 10-15 dec</p>
                        <p class="city">
                            <i class="fas fa-map-marker-alt"></i> London, UK
                        </p>
                    </div>

                    <h1 class="site-name">London<span>Techweek</span></h1>
                    <p class="slogan">Be part of the <span>future</span></p>
                </div>
                <!--.Event-information-->
            </div>
        </div>
        <!--hero-->
    </header>

    <div class="bar">
        <div class="container clearfix">
            <div class="logo">
                <a href="index.php">
                    <img src="img/london-logo2.svg" alt="Logo Londontechweek" /></a>
            </div>
            <div class="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <nav class="main-nav clearfix">
                <a href="conferences.php">Conferences</a>
                <a href="calendar.php">Calendar</a>
                <a href="guests.php">Guests</a>
                <a href="register.php">Reservations</a>
            </nav>
        </div>
        <!--.container-->
    </div>
    <!--.bar-->
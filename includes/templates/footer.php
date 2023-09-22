<footer class="site-footer">
    <div class="container clearfix">
        <div class="footer-information">
            <h3>About London<span>techweek</span></h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
                debitis quidem repellat, nisi minus totam reiciendis fugiat amet ex
                expedita dolor ducimus dignissimos tempora non quaerat. Illo, quasi
                aliquid! Alias!
            </p>
        </div>
        <div class="last-tweets">
            <h3>Last <span>tweets</span></h3>
            <ul>
                <li>
                    Quisquam cupiditate nemo ipsum commodi, itaque quis neque, quos
                    impedit perspiciatis.
                </li>
                <li>
                    Quisquam cupiditate nemo ipsum commodi, itaque quis neque, quos
                    impedit perspiciatis.
                </li>
                <li>
                    Quisquam cupiditate nemo ipsum commodi, itaque quis neque, quos
                    impedit perspiciatis.
                </li>
            </ul>
        </div>
        <div class="menu">
            <h3>Social <span>media</span></h3>
            <nav class="social-media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </nav>
        </div>
    </div>
    <p class="copyright">&copy2020 Londontechweek</p>

    <div style="display: none;">
        <!-- Begin Mailchimp Signup Form -->
        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            #mc_embed_signup {
                background: #fff;
                clear: left;
                font: 14px Helvetica, Arial, sans-serif;
            }

            /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style>
        <div id="mc_embed_signup">
            <form action="https://gmail.us6.list-manage.com/subscribe/post?u=ae587f292e937e86e6ed5f40f&amp;id=a5298f503f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <h2>Subscribe</h2>
                    <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Email Address <span class="asterisk">*</span>
                        </label>
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                    </div>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ae587f292e937e86e6ed5f40f_a5298f503f" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </div>
            </form>
        </div>
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
        <script type='text/javascript'>
            (function($) {
                window.fnames = new Array();
                window.ftypes = new Array();
                fnames[0] = 'EMAIL';
                ftypes[0] = 'email';
                fnames[1] = 'FNAME';
                ftypes[1] = 'text';
                fnames[2] = 'LNAME';
                ftypes[2] = 'text';
                fnames[3] = 'ADDRESS';
                ftypes[3] = 'address';
                fnames[4] = 'PHONE';
                ftypes[4] = 'phone';
                fnames[5] = 'BIRTHDAY';
                ftypes[5] = 'birthday';
            }(jQuery));
            var $mcj = jQuery.noConflict(true);
        </script>
        <!--End mc_embed_signup-->
    </div>
</footer>

<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/jquery.animateNumber.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.lettering.js"></script>

<?php
$file = basename($_SERVER['PHP_SELF']);
$page = str_replace(".php", "", $file);
if ($page == 'guests' || $page == 'index') {
    echo '<script src="js/jquery.colorbox.js"></script>';
} elseif ($page == 'conferences') {
    echo '<script src="js/lightbox.js"></script>';
}
?>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function() {
        ga.q.push(arguments);
    };
    ga.q = [];
    ga.l = +new Date();
    ga("create", "UA-XXXXX-Y", "auto");
    ga("set", "anonymizeIp", true);
    ga("set", "transport", "beacon");
    ga("send", "pageview");
</script>

<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
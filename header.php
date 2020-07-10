<div class="header-container">
    <div class="header-container__content">
        <a href="<?php echo home_url(); ?>">
        <h1>GameSource</h1>
        </a>
        <nav id="main-nav">
            <a id="Nieuws" href="<?php echo home_url(); ?>/nieuws">Nieuws</a>
            <a id="Reviews" href="<?php echo home_url(); ?>/reviews">Reviews</a>
            <a id="Previews" href="<?php echo home_url(); ?>/previews">Previews</a>
        </nav>
        <div class="hamburger">
        <!--    Made by Erik Terwan    -->
        <!--   24th of November 2015   -->
        <!--        MIT License        -->
        <nav role="navigation">
            <div id="menuToggle">
                <input type="checkbox" id="checkbox"/>
                <span id="span1"></span>
                <span id="span2"></span>
                <span id="span3"></span>
                <ul id="menu">
                    <div class="menu-wrapper">
                    <?php get_search_form() ?>
                    <div class="hamburger__links">
                        <a href="<?php echo home_url(); ?>/nieuws"><li>Nieuws</li></a>
                        <a href="<?php echo home_url(); ?>/reviews"><li>Reviews</li></a>
                        <a href="<?php echo home_url(); ?>/previews"><li>Previews</li></a>
                    <div class="hamburger__socials">
                        <a href="twitter.com"><i class="fab fa-twitter"></i></a>
                        <a href="facebook.com"><i class="fab fa-facebook-f"></i></a>
                        <a href="instagram.com"><i class="fab fa-instagram"></i></a>
                    </div>
                    </div>
                    </div>
                </ul>
            </div>
        </nav>
        </div>
    </div>
</div>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-172341440-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-172341440-1');
</script>

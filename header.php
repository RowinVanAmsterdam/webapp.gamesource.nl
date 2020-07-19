<div class="header-container">
    <div class="header-container__content">
        <a href="<?php echo home_url(); ?>" id="logo-white" class="hidden">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/gamesource--white.svg">
        </a>
        <a href="<?php echo home_url(); ?>" id="logo-default">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/gamesource--default.svg">
        </a>
        <nav id="main-nav">
            <a id="Nieuws" class="nav-item" href="<?php echo home_url(); ?>/nieuws">Nieuws</a>
            <a id="Reviews" class="nav-item" href="<?php echo home_url(); ?>/reviews">Reviews</a>
            <a id="Previews" class="nav-item" href="<?php echo home_url(); ?>/previews">Previews</a>
            <a id="Inloggen" class="nav-item" href="<?php echo wp_login_url(); ?>">Inloggen</a>
            <a id="Profiel" class="nav-item" class="hidden" href="<?php echo home_url(); ?>/user-profile">Mijn Profiel</a>
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
                        <a id="Inloggen-mobile" class="nav-item" href="<?php echo wp_login_url(); ?>"><li>Inloggen</li></a>
                        <a id="Profiel-mobile" class="nav-item" class="hidden" href="<?php echo home_url(); ?>/user-profile"><li>Mijn Profiel</li></a>
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

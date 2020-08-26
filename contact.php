<?php
/*
Template Name: Contact
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="GameSource, de bron voor al jouw gamenieuws">
    <meta name="author" content="GameSource">
    <script type="text/javascript">
    let homeUrl = '<?php echo home_url(); ?>';
    let userLoginStatus = "<?php echo $userLoginStatus ?>";
    </script>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.11/css/all.css">
    <title>GameSource | <?php the_title(); ?></title>
    <?php wp_head();?>
</head>

<body>
    <?php get_header(); ?>

    <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    <div class="container">
        <div class="contact-content">
            <div class="contact-content__contact-info">
                <img class="contact-info__logo"
                    src="<?php bloginfo('template_directory'); ?>/assets/img/gamesource--default.svg"
                    alt="GameSource logo">
                <a class="contact-info__mail" href="mailto:info@gamesource.nl" target="_blank"><i
                        class="contact-info__mail-icon far fa-envelope"></i>info@gamesource.nl</a>
                <h2 class="contact-info__social">Volg ons via:</h2>
                <a class="contact-info__social-icon" href="https://www.facebook.com/flutcadeau" target="_blank"><i class="fab fa-facebook"
                        aria-hidden="true"></i></a>
                <a class="contact-info__social-icon" href="https://www.instagram.com/flutcadeau" target="_blank"><i class="fab fa-instagram"
                        aria-hidden="true"></i></a>
                <a class="contact-info__social-icon" href="https://www.twitter.com/flutcadeau" target="_blank"><i class="fab fa-twitter"
                        aria-hidden="true"></i></a>
                <a class="contact-info__social-icon" href="https://www.pinterest.com/flutcadeau" target="_blank"><i class="fab fa-pinterest-p"
                        aria-hidden="true"></i></a>
            </div>
            <div class="contact-content__form">
                <!-- <form class="contact-form" action="" method="POST">
                    <h2 class="contact-form__title">Neem contact met ons op</h2>
                    <p class="contact-form__context">Contact met ons opnemen kan via het formulier hieronder, ons
                        antwoord zal je zo snel mogelijk op
                        de hieronder ingevulde e-mailadres ontvangen.</p>
                    <div class="contact-form__input-field">
                        <label for="contact-form__name">Naam</label>
                        <input type="text" id="contact-form__name" name="contact-form__name" required>
                    </div>
                    <div class="contact-form__input-field">
                        <label for="contact-form__email">E-mailadres</label>
                        <input type="email" id="contact-form__email" name="contact-form__email" required>
                    </div>
                    <div class="contact-form__input-field">
                        <label for="contact-form__description">Omschrijving</label>
                        <textarea name="inform_description" id="contact-form__description" cols="30" rows="10"
                            required></textarea>
                    </div>
                    <div>
                        <button type="submit" name="contact-form__submit">Verstuur</button>
                    </div>
                </form> -->
                <?php get_template_part( 'template-parts/contact-form'); ?>

            </div>
        </div>
    </div>

</body>

<?php get_footer();?>
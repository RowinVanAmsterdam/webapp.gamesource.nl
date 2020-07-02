<?php
/*
Template Name: Inform
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head();?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>

<body class="main">

    <div class="nav-container">
        <?php get_template_part('template-parts/navbar'); ?>
    </div>

    <div class="site-content inform-content">
        <section class="inform-form-container">
            <form class="inform-form" action="" method="POST">
                <h2>Cadeau doorgeven</h2>
                <p>Heb je een leuk cadeau gevonden en wil je deze delen met andere bezoekers? Laat het hieronder aan ons
                    weten en hopelijk behandelen wij hem snel!</p>
                <p>
                    <label for="inform_name">Naam</label>
                    <input type="text" id="inform_name" name="inform_name" required>
                </p>
                <p>
                    <label for="inform_email">E-mailadres</label>
                    <input type="email" id="inform_email" name="inform_email" required>
                </p>
                <p>
                    <label for="inform_store">Winkel</label>
                    <input type="text" id="inform_store" name="inform_store" required>
                </p>
                <p>
                    <label for="inform_link">Link</label>
                    <input type="text" id="inform_link" name="inform_link" required>
                </p>
                <p>
                    <label for="inform_description">Omschrijving</label>
                    <textarea name="inform_description" id="inform_description" cols="30" rows="10" required></textarea>
                </p>
                <div>
                    <button type="submit" name="inform_submit">Doorgeven</button>
                </div>
            </form>
        </section>
    </div>

    <?php get_footer();?>
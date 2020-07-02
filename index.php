<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GameSource</title>
    <?php wp_head();?>
</head>

<body>

<div class="nav-container">
    <?php get_template_part('template-parts/navbar'); ?>
</div>

<div class="container">
    <div class="content">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</div>

</body>
<?php get_footer();?>

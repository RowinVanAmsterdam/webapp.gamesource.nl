<?php
/*
Template Name: Home
*/
?>

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

<?php get_header(); ?>

<div class="container">
    <div class="highlight">
        <div class="slides">
        <?php
        query_posts(array(
            'category_name' => 'highlight',
            'posts_per_page' => 2,
        ));
        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
                <div class="highlight-card"
                     style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>);">
                    <a href="<?php echo the_permalink(); ?>" class="highlight-card-content">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_date(); ?></p>
                    </a>
                    <?php the_category();?>
                </div>
            <?php  endwhile;
        endif;
        ?>
        </div>
    </div>
    <div class="content">
        <h2>Laatste nieuws</h2>
        <?php
        query_posts(array(
            'category_name' => 'all',
            'posts_per_page' => 1,
        ));
        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
                <div class="article-card">
                    <a href="<?php echo the_permalink(); ?>" class="article-card-content">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>">
                        <?php the_category();?>
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_date(); ?></p>
                    </a>
                </div>
            <?php  endwhile;
        endif;
        ?>
    </div>
    </div>
</div>

</body>
<?php get_footer();?>

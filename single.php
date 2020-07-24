<?php
/*
* Template Name: Gamesource single post
* Template Post Type: post
*/
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript">
    let homeUrl = '<?php echo home_url(); ?>';
    let userLoginStatus = "<?php echo $userLoginStatus ?>";
    </script>
    <?php wp_head(); ?>
</head>

<?php get_header(); ?>

<?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>

<div class="featured-image">
    <?php the_post_thumbnail('full'); ?>
</div>

<div class="grid-container">
    <div class="postContainer">
        <div class="post">
            <?php the_category();?>
            <h2 class="post__title"><?php the_title(); ?></h2>
            <div class="post__metadata">
                <p class="post__author"><i class="fas fa-clock"></i><?php the_author(); ?></p>
                <p class="post__date"><i class="fas fa-comments"></i><?php the_date(); ?></p>
            </div>
            <div class="post__content">
                <?php the_content(); ?>
            </div>
        </div>

        <?php endwhile;
            endif;
            ?>

        <?php comments_template(); ?>
    </div>

    <div class="sideContainer">
    </div>
</div>

<?php get_footer(); ?>
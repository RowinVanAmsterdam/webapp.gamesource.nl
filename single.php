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
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.11/css/all.css">

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
                <p class="post__author-date"><i class="fas fa-user-clock"></i><?php the_author(); ?>,
                    <?php the_date(); ?> -
                    <?php the_time(); ?> uur</p>
                <p class="post__comments">
                    <i class="fas fa-comments"></i>
                    <a href="#comment-section">
                        <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
                    </a>
                </p>
            </div>
            <div class="post__content">
                <?php the_content(); ?>
            </div>
        </div>
            <?php
            setPostViews(get_the_ID());
            ?>
            <?php endwhile;
            endif;
            ?>

        <div id="comment-section">
            <?php comments_template(); ?>
        </div>
    </div>

    <div class="sideContainer">
    </div>
</div>

<?php get_footer(); ?>
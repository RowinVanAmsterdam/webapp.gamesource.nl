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
            <div class="postContainer__metadata">
                    <h2 class="metadata__title"><?php the_title(); ?></h2>
                    <div class="metadata__author-time">
                        <h3 class="metadata__detail"><?php the_author(); ?>&nbsp</h3>
                        <h3 class="metadata__detail">| <?php the_date(); ?></h3>
                    </div>
                <div class="postContainer__content">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php
            setPostViews(get_the_ID());
            ?>
            <?php endwhile;
            endif;
            ?>

            <?php comments_template(); ?>

        </div>

        <div class="sideContainer">

        </div>
    </div>

<?php get_footer(); ?>
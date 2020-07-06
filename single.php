<?php
/*
* Template Name: flutPost template
* Template Post Type: post
*/
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<div>

    <?php get_header(); ?>

    <div class="postContainer">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
        <div class="featuredBackground">
            <?php the_post_thumbnail('full'); ?>
        </div>
        <div class="postContent">
            <div class="postTitle">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="authorTime">
                <h3><?php the_author(); ?> </h3>
                <h3> - </h3>
                <h3> <?php the_date(); ?></h3>
            </div>
            <div class="post">
                <?php the_content(); ?>
            </div>
        </div>
        <?php endwhile;
        endif;
        ?>



        <?php comments_template(); ?>


        <!-- https://www.taniarascia.com/wordpress-from-scratch-part-two/ -->
<?php
//if ( have_posts() ) : while ( have_posts() ) : the_post();
//get_template_part( 'content-single', get_post_format() );

//if ( comments_open() || get_comments_number() ) :
//    comments_template();
//endif;

//endwhile; endif; ?>
        
    </div>
</div>

</div>

<?php get_footer(); ?>
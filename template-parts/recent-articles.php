<div>
<?php
query_posts(array(
    'category_name' => 'all',
    'posts_per_page' => 10,
));
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <div class="article-card">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>">
                <div class="article-card-text">
                    <?php the_category();?>
                    <a href="<?php echo the_permalink(); ?>" class="article-card-content">
                    <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                        <p class="metadata"><?php echo get_the_date(); ?> door <?php the_author(); ?></p>
                    </a>
                </div>
        </div>
    <?php  endwhile;
endif;
?>
</div>

<div>
    <?php
    $urlCategory = get_query_var('urlCategory');
    query_posts(array(
        'category_name' => $urlCategory,
        'posts_per_page' => 10,
    ));
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            <div class="article-card">
                <a href="<?php echo the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>">
                </a>
                <div class="article-card-text">
                    <?php the_category();?>
                    <a href="<?php echo the_permalink(); ?>" class="article-card-content">
                        <h2><?php the_title(); ?></h2>
                        <p class="metadata"><i class="fas fa-clock"></i><?php echo get_the_date(); ?> door <?php the_author(); ?></p>
                        <p class="metadata"><i class="fas fa-comments"></i><?php comments_number('0', '1', '%'); ?> Comments</p>
                    </a>
                </div>
            </div>
        <?php  endwhile;
    endif;
    ?>
</div>

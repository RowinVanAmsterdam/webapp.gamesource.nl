<div class="sidebar__container">
    <div class="sidebar__container-title">
        <h2>Populaire artikelen</h2>
    </div>

    <div>
        <?php
        $args = array(
            'post_status' => 'publish',
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'posts_per_page' => 3
        );
        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();?>
            <div class="popular__card">
<!--                <a href="--><?php //echo the_permalink(); ?><!--" class="popular__card--img">-->
<!--                    <img id="sidebar-img" src="--><?php //echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?><!--">-->
<!--                </a>-->
                <a href="<?php echo the_permalink(); ?>" class="popular__card--link">
                    <p class="sidebar-title"><?php the_title(); ?></p>
                    <img id="sidebar-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>">
                </a>
            </div>
        <?php  endwhile; ?>
    </div>
    <?php endif; ?>
</div>
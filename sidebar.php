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
            'posts_per_page' => 5
        );
        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();?>
            <div class="popular__card">
                <a href="<?php echo the_permalink(); ?>">
                    <img id="sidebar-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>">
                </a>
                <a href="<?php echo the_permalink(); ?>" class="popular__card--link">
                    <p class="sidebar-title"><?php the_title(); ?></p>
                </a>
            </div>
        <?php  endwhile; ?>
    </div>
    <?php endif; ?>

    <div class="iframe">
        <iframe style="border: 2px solid transparent; border-radius: 5px" width="200" height="505" src="https://www.cdkeys.com/nl_nl/affiliates/banner/frame/?size=200x505&colour=transparent&corners=5px&games=3419,6661,1126&affiliate=gamesource"></iframe>
    </div>
</div>
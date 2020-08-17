<div>
    <div class="specific_article-card--container">
    <?php
    $urlCategory = get_query_var('urlCategory');
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'category_name' => $urlCategory,
        'posts_per_page' => 6,
        'paged' => $paged
    );
    $the_query = new WP_Query( $args );

    // Pagination fix
    $temp_query = $wp_query;
    $wp_query   = NULL;
    $wp_query   = $the_query;
    if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();?>
            <div class="specific_article-card">
                    <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>">
                    </a>
                <div class="article-card-text">
<!--                    --><?php //the_category();?>
                    <a href="<?php echo the_permalink(); ?>" class="article-card-content">
                        <div class="metadata-container">
                            <p class="metadata"><i class="fas fa-user-clock"></i><?php echo get_the_date(); ?> door <?php the_author(); ?></p>
                            <p class="metadata"><i class="fas fa-comments"></i><?php comments_number('0', '1', '%'); ?> Comments</p>
                        </div>
                        <h2><?php the_title(); ?></h2>
<!--                        <p class="metadata"><i class="fas fa-clock"></i>--><?php //echo get_the_date(); ?><!-- door --><?php //the_author(); ?><!--</p>-->
<!--                        <p class="metadata"><i class="fas fa-comments"></i>--><?php //comments_number('0', '1', '%'); ?><!-- Comments</p>-->
                    </a>
                    <div class="post-categories-container">
                        <?php the_category();?>
                    </div>
                </div>
            </div>
        <?php  endwhile; ?>
        </div>
        <div class="pagination">
            <?php
            $big = 999999999;

            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $the_query->max_num_pages,
                'mid_size' => 2,
                'prev_text' => __( '', 'textdomain' ),
                'next_text' => __( '', 'textdomain' ),
            ) );
            ?>
        </div>
    <?php endif; ?>
</div>

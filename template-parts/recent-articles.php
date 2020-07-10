<div>
<?php
$selectedCat = get_query_var('selectedCat');
$page = (get_query_var('page')) ? get_query_var('page') : 1;
$args = array(
    'category_name' => $selectedCat,
    'posts_per_page' => 5,
    'paged' => $page
);
$the_query = new WP_Query( $args );

// Pagination fix
$temp_query = $wp_query;
$wp_query   = NULL;
$wp_query   = $the_query;

if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();?>
        <div class="article-card">
                <a href="<?php echo the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>">
                </a>
                <div class="article-card-text">
                    <?php the_category();?>
                    <a href="<?php echo the_permalink(); ?>" class="article-card-content">
                    <h2><?php the_title(); ?></h2>
<!--                        <span>--><?php //the_excerpt(); ?><!--</span>-->
                        <p class="metadata"><i class="fas fa-clock"></i><?php echo get_the_date(); ?> door <?php the_author(); ?></p>
                        <p class="metadata"><i class="fas fa-comments"></i><?php comments_number('0', '1', '%'); ?> Comments</p>
                    </a>
                </div>
        </div>
    <?php  endwhile; ?>
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

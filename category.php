<?php
/*
Template Name: Categories
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript">
        let homeUrl = '<?php echo home_url(); ?>';
        let userLoginStatus = "<?php echo $userLoginStatus ?>";
    </script>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>GameSource</title>
    <?php wp_head();?>
</head>

<body>

<?php get_header(); ?>

<div class="container">
    <div class="content">
        <div class="content-top-row">
            <h2 id="Laatste-nieuws">Categorie: <?php echo single_cat_title( '', false ); ?></h1></h2>
        </div>
        <div class="content-grid">
            <div class="content-left">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();?>
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
                <?php
                    endwhile;
                endif;
                ?>
            </div>
            <div class="content-right">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    <?php get_template_part( 'template-parts/cookie-message'); ?>
</div>
</div>

</body>
<?php get_footer();?>


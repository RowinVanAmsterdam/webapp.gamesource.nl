<?php
/*
Template Name: Home
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
    </script>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title>GameSource</title>
    <?php wp_head();?>
</head>

<body>

<?php get_header(); ?>

<div class="container">
    <div class="highlight">
        <div class="indicators">
            <div id="circle1" class="active-indicator"></div>
            <div id="circle2"></div>
            <div id="circle3"></div>
        </div>
        <div class="slides">
        <?php
        query_posts(array(
            'category_name' => 'highlight',
            'posts_per_page' => 3,
        ));
        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
                <div class="highlight-card"
                     style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>);">
                    <a href="<?php echo the_permalink(); ?>" class="highlight-card-content">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_date(); ?></p>
                    </a>
                    <?php the_category();?>
                </div>
            <?php  endwhile;
        endif;
        ?>
        </div>
    </div>
    <div class="content">
        <div class="content-top-row">
        <h2 id="Laatste-nieuws">Laatste nieuws</h2>
        <form action="<?php global $test ?>" method="get" id="form-submit">
            <label>Sorteer op:</label>
            <select name="cat-filter" id="cat-filter">
<!--                <option id="geenSelectie" value="geenSelectie"></option>-->
            <?php
            $categories = get_categories();
            foreach ($categories as $category) {
                echo '<option id="'.$category->name.'" value="'.$category->name.'">'.$category->name.'</option>';
            }
            ?>
            </select>
        </form>
        </div>
        <div class="content-grid">
            <div class="content-left">
                <?php set_query_var('selectedCat', $test); ?>
                <?php get_template_part( 'template-parts/recent-articles'); ?>
            </div>
            <div class="content-right">

            </div>
        </div>
    </div>
    </div>
</div>
<?php get_footer();?>
</body>

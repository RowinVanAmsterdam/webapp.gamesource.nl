<?php
/*
Template Name: Privacy
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
            <h2 id="Laatste-nieuws">Privacy beleid</h1></h2>
        </div>
        <div class="content-grid">
            <div class="content-left">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </div>
            <div class="content-right">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    <div id="cookie-message">
        <!--        --><?php //get_template_part( 'template-parts/cookie-message'); ?>
    </div>
</div>
</div>

</body>
<?php get_footer();?>



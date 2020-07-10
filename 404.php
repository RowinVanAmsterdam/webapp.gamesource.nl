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
    <div class="container__content">
        <div class="container__content--top">
            <h2 id="Laatste-nieuws">Game over</h2>
            <h3>Dat ging niet helemaal goed.</h3>
            <p>Misschien kan je hier vinden waar je naar op zoek bent</p>
            <div><?php get_search_form() ?></div>
            <a class="home-link" href="<?php echo home_url(); ?>">Of klik hier om terug te gaan naar het vorige checkpoint</a>
        </div>
    </div>
</div>
</div>

</body>
<?php get_footer();?>

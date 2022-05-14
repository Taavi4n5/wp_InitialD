<!DOCTYPE html>
<html lang="et">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
</head>
<?php get_header("header.php"); ?>
<body>
    <div class="container_5">
        
        <div class="container_text">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
        <div class="container_pictures">
        <img src="<?php echo(get_post_meta(get_the_ID(), $key = 'image1', $single = true)); ?>" alt="">
        <img src="<?php echo(get_post_meta(get_the_ID(), $key = 'image2', $single = true)); ?>" alt="">
        <img src="<?php echo(get_post_meta(get_the_ID(), $key = 'image3', $single = true)); ?>" alt="">
        <img src="<?php echo(get_post_meta(get_the_ID(), $key = 'image4', $single = true)); ?>" alt="">
        </div>
    </div>
<?php get_footer("footer.php"); ?>
</body>

</html>
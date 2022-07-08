

<?php 
get_header();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
</head>
<body>
<div class="hero_bg">
    <?php if( get_field('banner_image') ): ?>
            <img src="<?php the_field('banner_image'); ?>" />
    <?php endif; ?>
    <div class="banner-title">
            <?php if( get_field('banner_title') ): ?>
                <h1><?php the_field('banner_title'); ?></h1>
        <?php endif; ?>
        <div class="banner-footer">
            <div class="shape">
                
            </div>
            <div class="details">
            <?php if( get_field('banner_footer_1') ): ?>
                        <h1><?php the_field('banner_footer_1'); ?></h1>
                <?php endif; ?>
                <?php if( get_field('banner_footer_2') ): ?>
                        <h1 class="medium"><?php the_field('banner_footer_2'); ?></h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php 

while(have_posts()){
    the_post();?>
<h1> <?php the_title(); ?></h1>
<p><?php the_excerpt() ?></p>


<?php
}

?>
<?php 
get_footer();
?>
</html>

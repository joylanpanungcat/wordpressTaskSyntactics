
<?php 
/*

Template Name: Services

*/
get_header();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
</head>
<body>
<div class="hero_bg">
<?php if( get_field('services_background') ): ?>
        <img src="<?php the_field('services_background'); ?>" />
<?php endif; ?>
<div class="banner-title">
        <?php if( get_field('banner_title') ): ?>
            <h1><?php the_field('banner_title'); ?></h1>
    <?php endif; ?>
</div>
</div>
<div class="container services">
    <?php 
    $tax= 'brands';
    $terms= get_terms($tax, array('hide_empty'=>false));

    foreach($terms as $term){
        $termLink = get_term_link($term); 
        $image_cat= get_field('background_title', 'term_'.$term->term_id);
    
        if($term->count >0){
            ?>
             <div class="card">
                <div class="image">
                     <img src="<?php echo $image_cat ?>" alt="" class="img-fluid">
                </div>
                <div class="title">
                     <a href="<?php echo $termLink; ?>"><?php echo $term->name; ?></a>
                </div>
             </div>
            <?php
        }
    }

    ?>
</div>
<?php 
get_footer();
?>
</html>
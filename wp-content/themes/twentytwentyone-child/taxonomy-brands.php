

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
$tax = $wp_query->get_queried_object();
echo "<h1>".$tax->name."</h1>";
$term_id =get_queried_object()->term_id;

$args = array( 
    'post_type' => 'cars', // standard post type is 'post', you use a custom one
    'tax_query' => array( // you check for taxonomy field values
        array(
            'taxonomy' => 'brands', // standard is 'category' you use a custom one
            'field'    => 'term_id', // you want to get the terms by its slug (could also use id)
            'terms'    => array($term_id), // this is the taxonomy term slug the post has set
        ),
    ),
);

$query = new WP_Query( $args ); // get post objects
if($query->have_posts()){
    while($query->have_posts()){
        $query->the_post();?>
        <div class="single_link">
            <a href="<?php echo the_permalink() ?>"><?php the_title() ?></a>
        </div>

        <?php
    }
}
?>
<?php 
get_footer();
?>
</html>

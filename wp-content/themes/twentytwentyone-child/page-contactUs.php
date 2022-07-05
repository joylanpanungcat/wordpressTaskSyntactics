<?php
/*
Template Name: Contact 
 */

get_header();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="hero_bg">
            <?php if( get_field('banner-background') ): ?>
                    <img src="<?php the_field('banner-background'); ?>" />
            <?php endif; ?>
          
        </div>
<?php
    get_footer(); 
    ?>
</html>
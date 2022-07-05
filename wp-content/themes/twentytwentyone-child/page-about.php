<?php
/*
Template Name: About 
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
    <?php if( get_field('about_banner') ): ?>
            <img src="<?php the_field('about_banner'); ?>" />
    <?php endif; ?>
</div>
<div class="container">
    <div class="about-us">
        <?php if(get_field('aboutus_text')): ?>
            <h2><?php the_field('aboutus_text') ?></h2>
        <?php endif; ?>
        <?php if(get_field('aboutus_text_2')): ?>
            <h1><?php the_field('aboutus_text_2') ?></h1>
        <?php endif; ?>
        <?php if(get_field('aboutus_text_3')): ?>
            <h5><?php the_field('aboutus_text_3') ?></h5>
        <?php endif; ?>
    </div>
</div>
<div class="about-banner2">
<?php if( get_field('about_banner_2') ): ?>
            <img src="<?php the_field('about_banner_2'); ?>" />
    <?php endif; ?>
</div>
<div class="container">
    <div class="why_people">
        <?php if( get_field('why_people') ): ?>
            <h1><?php the_field('why_people'); ?></h1>
        <?php endif; ?>
        <?php if( get_field('why_people_description') ): ?>
            <h5><?php the_field('why_people_description'); ?></h5>
        <?php endif; ?>
        <?php if( get_field('our_values') ): ?>
            <h2><?php the_field('our_values'); ?></h2>
        <?php endif; ?>
        <?php if( get_field('our_values_description') ): ?>
            <h5><?php the_field('our_values_description'); ?></h5>
        <?php endif; ?>
        <?php if( get_field('geekiness') ): ?>
            <h2><?php the_field('geekiness'); ?></h2>
        <?php endif; ?>
        <?php if( get_field('geekiness_description') ): ?>
            <h5><?php the_field('geekiness_description'); ?></h5>
        <?php endif; ?>
        <?php if( get_field('generosity') ): ?>
            <h2><?php the_field('generosity'); ?></h2>
        <?php endif; ?>
        <?php if( get_field('generosity_description') ): ?>
            <h5><?php the_field('generosity_description'); ?></h5>
        <?php endif; ?>
        <?php if( get_field('drive') ): ?>
            <h2><?php the_field('drive'); ?></h2>
        <?php endif; ?>
        <?php if( get_field('drive_description') ): ?>
            <h5><?php the_field('drive_description'); ?></h5>
        <?php endif; ?>
    </div>
</div>
<div class="container">
    <div class="facts">
        <div class="devider"></div>
        <div class="fact-header">
                 <?php if( get_field('the_facts') ): ?>
                     <h5><?php the_field('the_facts'); ?></h5>
                <?php endif; ?>
        </div>
        <div class="item-content">
        <div class="item">
            <div class="item_number">
                <?php if( get_field('years_strong_number') ): ?>
                     <h5><?php the_field('years_strong_number'); ?></h5>
                <?php endif; ?>
            </div>
            <div class="item_title">
                <?php if( get_field('years_strong_title') ): ?>
                     <h5><?php the_field('years_strong_title'); ?></h5>
                <?php endif; ?>
            </div>
            <div class="item_description">
                <?php if( get_field('years_strong_description') ): ?>
                     <h5><?php the_field('years_strong_description'); ?></h5>
                <?php endif; ?>
            </div>
        </div>
        <div class="item">
            <div class="item_number">
                <?php if( get_field('experts_number') ): ?>
                     <h5><?php the_field('experts_number'); ?></h5>
                <?php endif; ?>
            </div>
            <div class="item_title">
                <?php if( get_field('experts_title') ): ?>
                     <h5><?php the_field('experts_title'); ?></h5>
                <?php endif; ?>
            </div>
            <div class="item_description">
                <?php if( get_field('experts_description') ): ?>
                     <h5><?php the_field('experts_description'); ?></h5>
                <?php endif; ?>
            </div>
        </div>
        <div class="item">
            <div class="item_number">
                <?php if( get_field('languages_number') ): ?>
                     <h5><?php the_field('languages_number'); ?></h5>
                <?php endif; ?>
            </div>
            <div class="item_title">
                <?php if( get_field('languages_title') ): ?>
                     <h5><?php the_field('languages_title'); ?></h5>
                <?php endif; ?>
            </div>
            <div class="item_description">
                <?php if( get_field('languages_description') ): ?>
                     <h5><?php the_field('languages_description'); ?></h5>
                <?php endif; ?>
            </div>
        </div>
        <div class="item">
            <div class="item_number">
                <?php if( get_field('problem_number') ): ?>
                     <h5><?php the_field('problem_number'); ?></h5>
                <?php endif; ?>
            </div>
            <div class="item_title">
                <?php if( get_field('problem_title') ): ?>
                     <h5><?php the_field('problem_title'); ?></h5>
                <?php endif; ?>
            </div>
            <div class="item_description">
                <?php if( get_field('problem_description') ): ?>
                     <h5><?php the_field('problem_description'); ?></h5>
                <?php endif; ?>
            </div>
        </div>
        <div class="item">
            <div class="item_number">
                <?php if( get_field('awards_number') ): ?>
                     <h5><?php the_field('awards_number'); ?></h5>
                <?php endif; ?>
            </div>
            <div class="item_title">
                <?php if( get_field('awards_title') ): ?>
                     <h5><?php the_field('awards_title'); ?></h5>
                <?php endif; ?>
            </div>
            <div class="item_description">
                <?php if( get_field('awards_description') ): ?>
                     <h5><?php the_field('awards_description'); ?></h5>
                <?php endif; ?>
            </div>
        </div>
        <div class="item">
            <div class="item_number">
                <?php if( get_field('bottom_number') ): ?>
                     <h5><?php the_field('bottom_number'); ?></h5>
                <?php endif; ?>
            </div>
            <div class="item_title">
                <?php if( get_field('bottom_title') ): ?>
                     <h5><?php the_field('bottom_title'); ?></h5>
                <?php endif; ?>
            </div>
            <div class="item_description">
                <?php if( get_field('bottom_description') ): ?>
                     <h5><?php the_field('bottom_description'); ?></h5>
                <?php endif; ?>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="team">
    <div class="image_1">
    <?php if( get_field('meet_out_team1') ): ?>
            <img src="<?php the_field('meet_out_team1'); ?>" class="img-fluid" />
    <?php endif; ?>
    </div>
    <div class="image_2">
    <?php if( get_field('meet_out_team2') ): ?>
            <img src="<?php the_field('meet_out_team2'); ?>"  class="img-fluid"/>
    <?php endif; ?>
    </div>
</div>
<div class="contact-about">
      <?php if( get_field('contact_text_1') ): ?>
           <h1><?php the_field('contact_text_1'); ?></h1>
      <?php endif; ?>
      <?php if( get_field('contact_text_2') ): ?>
           <h1 class="number"><?php the_field('contact_text_2'); ?></h1>
      <?php endif; ?>
   
    
    </div>
<?php 
get_footer(); 
?>
</html>
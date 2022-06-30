<?php
/*
Template Name: Home 
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
    <div class="home_page">
        <div class="hero_bg">
            <img src="http://localhost/syntactics/day1/wordpress/wp-content/uploads/2022/06/home-background.png" alt="">
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
        <div class="container">
                <div class="about">
                    <div class="column1">
                        <h1>We're on a mission to create technology that changes business for the better  </h1>
                    </div>
                    <div class="column2">
                        <h1>Maybe you’ve an epic site build, or a functionality funk. Perhaps you’ve mountains of content to manage. Is your UX not taking people on the right journey? Does your in-house team need a boost? Does your entire business need digital transformation?

                        We love to find the strategy, engineering and design that will solve your problems. And there’s a good chance we’ll have done something like it before.</h1>
                    <div class="view_our_services">
                        <a href="http://localhost/syntactics/day1/wordpress/services/">VIEW OUR SERVICES</a>
                    </div>
                </div>
            </div>
        <div class="container">
            <div class="card_slider swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                                <div class="card">
                                    <img src="http://localhost/syntactics/day1/wordpress/wp-content/uploads/2022/06/sllider1.png" alt="">
                                </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="http://localhost/syntactics/day1/wordpress/wp-content/uploads/2022/06/sllider2.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="http://localhost/syntactics/day1/wordpress/wp-content/uploads/2022/06/sllider3.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                            <img src="http://localhost/syntactics/day1/wordpress/wp-content/uploads/2022/06/sllider4.png" alt="">
                            </div>
                        </div>
                    </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-scrollbar"></div>
            </div>
                
        
        </div>
        </div>

        <div class="gota_problem">
            <div class="image ">
                <?php if( get_field('got_a_problem') ): ?>
                        <img src="<?php the_field('got_a_problem'); ?>" />
                <?php endif; ?>
            </div>
            <div class="we_solve_it">
                    <h1>Got a Problem? <br>
                        We'll solve it.</h1>
                    <p>Maybe you've an epic site build, or a functionality funk. Perhaps you've mountains of content to manage. Is your UX not taking people on the right journey? Does your in-house team need a boost? Does your entire business need digital transformation?
                  </p><p>
                        We love to find the strategy, engineering and design that will solve your problems. And there's a good chance we'll have done something like it before.</p>
                    <a href="">View Case studies</a>
            </div>
        
        </div>
        <div class="container">
        <div class="insights">
                <div class="insights-header">
                    <div class="left">
                        <h1>Insights</h1>
                    </div>
                    <div class="right">
                    <?php 
                        $link = get_field('see_more_insights');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_blank';
                            ?>
                            <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card-content">
                <div class="card">
                    <div class="image">
                        <?php if( get_field('first_image') ): ?>
                            <img src="<?php the_field('first_image'); ?>" />
                      <?php endif; ?>
                    </div>
                    <div class="profile">
                        <div class="image">
                        <?php if( get_field('michael_hogg_profile') ): ?>
                            <img src="<?php the_field('michael_hogg_profile'); ?>" />
                      <?php endif; ?>
                        </div>
                        <div class="info">
                        <?php if( get_field('michael_hogg') ): ?>
                            <h1><?php the_field('michael_hogg'); ?></h1>
                            <p>5 min read</p>
                      <?php endif; ?>
                            
                        </div>

                    </div>
                    <div class="description">
                    <?php if( get_field('michael_hogg_description') ): ?>
                            <h1><?php the_field('michael_hogg_description'); ?></h1>
                      <?php endif; ?>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <?php if( get_field('second_image') ): ?>
                            <img src="<?php the_field('second_image'); ?>" />
                      <?php endif; ?>
                    </div>
                    <div class="profile">
                        <div class="image">
                        <?php if( get_field('gavin_shinfield_profile') ): ?>
                            <img src="<?php the_field('gavin_shinfield_profile'); ?>" />
                      <?php endif; ?>
                        </div>
                        <div class="info">
                        <?php if( get_field('gavin_shinfield') ): ?>
                            <h1><?php the_field('gavin_shinfield'); ?></h1>
                            <p>10 min read</p>
                      <?php endif; ?>
                            
                        </div>

                    </div>
                    <div class="description">
                    <?php if( get_field('gavin_shinfield_description') ): ?>
                            <h1><?php the_field('gavin_shinfield_description'); ?></h1>
                      <?php endif; ?>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <?php if( get_field('third_image') ): ?>
                            <img src="<?php the_field('third_image'); ?>" />
                      <?php endif; ?>
                    </div>
                    <div class="profile">
                        <div class="image">
                        <?php if( get_field('peirs_palmer_profile') ): ?>
                            <img src="<?php the_field('peirs_palmer_profile'); ?>" />
                      <?php endif; ?>
                        </div>
                        <div class="info">
                        <?php if( get_field('peirs_palmer') ): ?>
                            <h1><?php the_field('peirs_palmer'); ?></h1>
                            <p>5 min read</p>
                      <?php endif; ?>
                            
                        </div>

                    </div>
                    <div class="description">
                    <?php if( get_field('peirs_palmer_description') ): ?>
                            <h1><?php the_field('peirs_palmer_description'); ?></h1>
                      <?php endif; ?>
                    </div>
                </div>
                </div>
        </div>
        </div>
        <div class="container">
        <div class="companies">
            <div class="companies-header">
                <div class="left">
                <?php if( get_field('campanies_header_left') ): ?>
                            <h1><?php the_field('campanies_header_left'); ?></h1>
                      <?php endif; ?>
                </div>
                <div class="right">
                <?php if( get_field('companies_header_right') ): ?>
                            <h1><?php the_field('companies_header_right'); ?></h1>
                      <?php endif; ?>
                </div>
            </div>
            <div class="companies-logo">
                <div>
                    <?php if( get_field('bit_coin') ): ?>
                            <img src="<?php the_field('bit_coin'); ?>" />
                      <?php endif; ?>
                </div>
                <div>
                    <?php if( get_field('bootstrap') ): ?>
                            <img src="<?php the_field('bootstrap'); ?>" />
                      <?php endif; ?>
                </div>
                <div>
                    <?php if( get_field('c_paypal') ): ?>
                            <img src="<?php the_field('c_paypal'); ?>" />
                      <?php endif; ?>
                </div>
                <div>
                    <?php if( get_field('amazon') ): ?>
                            <img src="<?php the_field('amazon'); ?>" />
                      <?php endif; ?>
                </div>
                <div>
                    <?php if( get_field('codepen') ): ?>
                            <img src="<?php the_field('codepen'); ?>" />
                      <?php endif; ?>
                </div>
                <div>
                    <?php if( get_field('docker') ): ?>
                            <img src="<?php the_field('docker'); ?>" />
                      <?php endif; ?>
                </div>
                <div>
                    <?php if( get_field('cpanel') ): ?>
                            <img src="<?php the_field('cpanel'); ?>" />
                      <?php endif; ?>
                </div>
                <div>
                    <?php if( get_field('github') ): ?>
                            <img src="<?php the_field('github'); ?>" />
                      <?php endif; ?>
                </div>
                <div>
                    <?php if( get_field('free_code_camp') ): ?>
                            <img src="<?php the_field('free_code_camp'); ?>" />
                      <?php endif; ?>
                </div>
                <div>
                    <?php if( get_field('intercom') ): ?>
                            <img src="<?php the_field('intercom'); ?>" />
                      <?php endif; ?>
                </div>
                <div>
                    <?php if( get_field('javascript') ): ?>
                            <img src="<?php the_field('javascript'); ?>" />
                      <?php endif; ?>
                </div>
                <div>
                    <?php if( get_field('php') ): ?>
                            <img src="<?php the_field('php'); ?>" />
                      <?php endif; ?>
                </div>
                <div>
                    <?php if( get_field('pinterest') ): ?>
                            <img src="<?php the_field('pinterest'); ?>" />
                      <?php endif; ?>
                </div>
                <div>
                    <?php if( get_field('redhat') ): ?>
                            <img src="<?php the_field('redhat'); ?>" />
                      <?php endif; ?>
                </div>
                <div>
                    <?php if( get_field('sass') ): ?>
                            <img src="<?php the_field('sass'); ?>" />
                      <?php endif; ?>
                </div>
                <div>
                    <?php if( get_field('shopify') ): ?>
                            <img src="<?php the_field('shopify'); ?>" />
                      <?php endif; ?>
                </div>

            </div>
        </div>
        </div>

    <div class="contact">
      <?php if( get_field('contact_text_1') ): ?>
           <h1><?php the_field('contact_text_1'); ?></h1>
      <?php endif; ?>
      <?php if( get_field('contact_text_2') ): ?>
           <h1><?php the_field('contact_text_2'); ?></h1>
      <?php endif; ?>
      <?php if( get_field('contact_text_3') ): ?>
           <h1 class="number"><?php the_field('contact_text_3'); ?></h1>
      <?php endif; ?>
    </div>
    <?php
    get_footer(); 
    ?>
</html>

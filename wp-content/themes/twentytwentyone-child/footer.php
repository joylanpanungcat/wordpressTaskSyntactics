
<div class="footer">
  <div class="container container-fluid footer-container">
      <div class="col-1-footer">
          <div class="website_logo">
            <?php if( get_field('website_logo') ): ?>
                    <img src="<?php the_field('website_logo'); ?>" />
            <?php endif; ?>
          </div>
          <div class="company_logo">
            <?php if( get_field('bima_logo') ): ?>
                  <img src="<?php the_field('bima_logo'); ?>" />
              <?php endif; ?>
              <?php if( get_field('best_company_logo') ): ?>
                  <img src="<?php the_field('best_company_logo'); ?>" />
              <?php endif; ?>
              <?php if( get_field('ecology_logo') ): ?>
                  <img src="<?php the_field('ecology_logo'); ?>" />
              <?php endif; ?>
          </div>
      </div>
      <div class="col-2-footer">
          <div class="menus_footer">
          <?php 
                wp_nav_menu(
                  array(
                    'menu'=>'Main Menu',
                    'container'=>'',
                    'menu_class'=>'main_menu_footer',
                    'theme_location'=>'primary',
                    // 'items_wrap'=>'<ul  class="nav navbar-nav me-auto  my-2 my-lg-0 navbar-nav-scroll" >%3$s</ul>'
                  )
                )
            
                ?>
          </div>
          <div class="address_footer">
          <?php if( get_field('address_footer') ): ?>
                  <h1><?php the_field('address_footer'); ?></h1>
            <?php endif; ?>
            <?php 
                $link = get_field('view_direction');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_blank';
                    ?>
                    <a  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>
          </div>
          <div class="media_footer">
            <?php 
                  wp_nav_menu(
                    array(
                      'menu'=>'social-icon',
                      'container'=>'',
                      'menu_class'=>'',
                      'theme_location'=>'primary',
                      // 'items_wrap'=>'<ul  class="" >%3$s</ul>'
                    )
                  )
                  ?>
          </div>
      </div>
      <div class="terms-footer">
        <div class="divider"></div>
        <div class="terms">
          <div class="left">
          <?php if( get_field('terms') ): ?>
                  <h1><?php the_field('terms'); ?></h1>
            <?php endif; ?>
          </div>
          <div class="right">
          <?php if( get_field('terms2') ): ?>
                  <h1><?php the_field('terms2'); ?></h1>
            <?php endif; ?>
          </div>
        </div>
      </div>
      </div>
</div>

<button
        type="button"
        class="btn  btn-floating btn-lg"
        id="btn-back-to-top"
        >
<i class="fas fa-arrow-up"></i>
</button>

<button
        type="button"
        class="btn  btn-floating btn-lg"
        id="send-message">
        <i class="fas fa-comment-alt"></i>
</button>



<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: "auto",
    pagination: {
      el: ".swiper-pagination",
      spaceBetween: 40,
      clickable: true,
    },
  });

  
</script>
<?php wp_footer();?>

</body>
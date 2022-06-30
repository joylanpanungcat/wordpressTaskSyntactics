<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
</head>
<?php wp_head();?>
<body>


<nav class="navbar navbar-expand-sm  " id="navbar-header">
  <div class="container container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="#"><img src="http://localhost/syntactics/day1/wordpress/wp-content/uploads/2022/06/Logo.png" alt="" class="img-fluid"></a>
    </div>
 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="nav navbar-nav navbar-right">
      <?php 
           wp_nav_menu(
             array(
              'menu'=>'Main Menu',
              'container'=>'',
              'menu_class'=>'main_menu',
              'theme_location'=>'primary',
              // 'items_wrap'=>'<ul  class="nav navbar-nav me-auto  my-2 my-lg-0 navbar-nav-scroll" >%3$s</ul>'
             )
           )
       
          ?>
      </ul>
      <button class="where_hiring_btn">Where Hiring</button>
    </div>
  </div>
</nav>

</body>

</body>
</html>
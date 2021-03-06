<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tạp chí Doanh nghiệp Việt Nam, Đọc báo tin tức doanh nghiệp - Doanh nghiệp Việt Nam</title>
      <meta name="keywords" content="Tin tuc doanh nghiep, Doanh nghiep viet nam, Bao doanh nghiep, bao doanh nhan, Doc bao, Kinh doanh, doanh nhan Viet Nam, Tin tuc cap nhat 24h, Tin tuc, Tintuc, tin moi, tin mới, tin 24h, đọc báo, tin tuc online, tin tuc cap nhat, tin tuc moi, tin moi cap nhat, tin trong ngay" />
      <meta name="description" content="Tin tức doanh nghiệp Việt Nam, thông tin về các doanh nghiệp, doanh nhân, cơ hội kinh doanh, xúc tiến thương mại cho cộng đồng doanh nghiệp Việt Nam" />
      <!-- css -->
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/slick.css">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/animate.css">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css">
      <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/images/favicon.ico">
      <!-- js -->
      <script src="<?php echo BASE_URL; ?>/js/jquery.min.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/owl.carousel.min.js"></script>
      <script src="<?php echo BASE_URL; ?>/js/bootstrap.min.js"></script>
      <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>
      <div class="bg_opacity"></div>
      <?php if ( wp_is_mobile() ) { ?>
      <?php }?>
      <header>
         <div class="header">
            <div class="top_header">
               <div class="container">
                  <div class="logo_site">
                     <?php 
                        if(has_custom_logo()){
                         the_custom_logo();
                        }else { ?>
                     <h2>Chua upload logo</h2>
                     <?php } ?>
                  </div>
                  <div class="banner_header">
                     <a href="#" target="_blank"><img src="<?php  echo BASE_URL; ?>/images/banner-header-1.jpg"></a>
                  </div>
               </div>
            </div>
            <div class="middle_header">
               <div class="container">
                  <div class="menu_header">
                     <nav class="nav_primary">
                        <?php 
                           wp_nav_menu( array(
                            'theme_location' => 'primary-menu',
                            'menu_class' => 'qb_memu_header',
                           ) );
                           ?>
                     </nav>
                     <div class="menu_zoom">
                        <i class="fa fa-bars icon_zoom" aria-hidden="true"></i>
                        <div class="zoom_width">
                           <div class="search_form">
                              <form role="search" method="get" id="searchform" action="<?php echo home_url('/');  ?>">
                                 <div class="wrap_search_header">
                                    <input type="text" value="" name="s" id="s" placeholder="Tìm kiếm">
                                    <input type="hidden" value="post" name="post_type">
                                    <button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
                                 </div>
                              </form>
                           </div>
                           <?php 
                              wp_nav_menu( array(
                               'theme_location' => 'primary-menu',
                               'menu_class' => 'qb_memu_header',
                              ) );
                              ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
   </body>
</html>
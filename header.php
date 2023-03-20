<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./assets/favicon-32x32.png"
    />
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="mega-container">
    <header>
      <nav>
        <div class="container header-container">
          <div class="nav-container">
            <div class="menu-box">
              <div class="logo-box">
              <?php 
                  if(class_exists('ACF')) {
                    $logo = get_field('logo', 'options');
                  }
                  ?>
              <a href="<?php echo get_home_url();?>">  <img src="<?php echo $logo; ?>" alt="" />
                </div>
              <nav class="nav">
              <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'primary-menu',
                                'menu_class'     => 'menu'   
                            ));
                        ?>
              </nav>
              <div class="mobile-nav" id="box-menu-mobile" style="display: none">
                <div class="offcanva-bg">
                  <?php 
                  if(class_exists('ACF')) {
                    $background = get_field('background', 'options');
                  }
                  ?>
               
                  <img src="<?php echo $background; ?>" alt="" />
                </div>
                <div class="offcanva">
                  <div class="offcanva-image-box">
                    <button type="button" class="mobile-button" id="closeMobile">
                    <?php 
                  if(class_exists('ACF')) {
                    $mobile_close = get_field('mobile_close', 'options');
                  }
                  ?>
                
                <img src="<?php echo $mobile_close; ?>" alt="" />
                    </button>
                  </div>
                  <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'primary-menu',
                                'menu_class'     => 'menu-mobile'   
                            ));
                        ?>
                  <button class="btn-pink nav-mobile-buttom">Schedule a demo</button>
                </div>
              </div>
            </div>
            <button class="btn-pink nav-button">Schedule a demo</button>
            <button type="button" id="openMobile" class="mobile-button">
           
            <?php 
                  if(class_exists('ACF')) {
                    $mobile_open = get_field('mobile_open', 'options');
                  }
                  ?>
                
                <img src="<?php echo $mobile_open; ?>" alt="" />
            </button>
          </div>
        </div>
      </nav>
    </header>
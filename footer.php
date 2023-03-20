<section id="CTA" class="container">
          <div class="CTA-container">
          <?php 
                  if(class_exists('ACF')) {
                    $CTA_text = get_field('cta_text', 'options');
                    $CTA_button_text = get_field('cta_button_text', 'options');
                  }
                  ?>
            <h2 class="h2"><?php echo $CTA_text ?></h2>
            <div class="cta-input-box">
              <input
                type="text"
                class="cta-input"
                placeholder="Enter email adress"
              />
              <button class="btn-pink cta-button"><?php echo $CTA_button_text ?></button>
            </div>
          </div>
        </section>
      </main>
      <footer>
        <div class="container footer-container">
          <div class="footer-bg">
          <?php 
                  if(class_exists('ACF')) {
                    $background = get_field('background', 'options');
                  }
                  ?>
               
                  <img src="<?php echo $background; ?>" alt="" />
          </div>
          <div class="footer-menu-container">
            <div class="menu-box">
              <div class="logo-box">
               
              <a href="<?php echo get_home_url();?>">   <?php 
                  if(class_exists('ACF')) {
                    $logo = get_field('logo', 'options');
                  }
                  ?>
              <a href="<?php echo get_home_url();?>">  <img src="<?php echo $logo; ?>" alt="" /> <a/>
              </div>
              <nav class="nav-footer">
              <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'primary-menu',
                                'menu_class'     => 'menu-footer'   
                            ));
                        ?>
              </nav>
          </div>
          <div class="footer-icons-box">
          <?php 
                  if(class_exists('ACF')) {
                    $socials = get_field('social_icons', 'options');
                  }
                  foreach($socials as $social){
                  ?>
            <div class="footer-icon-box"><a href="<?php echo $social['social_url'];?>"><img src="<?php echo $social['social_icon'];?>" alt=""><a/></div>
            <?php 
                  }
                  ?>
    
          </div>
        </div>
      </footer>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>

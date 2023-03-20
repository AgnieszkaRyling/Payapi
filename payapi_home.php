<?php 
/*
 * Template name: Payapi Home template
 */
get_header(); ?>
    <main>
        <section id="id" class="container">
          <div class="hero-container">
            <div class="site-bg">
            <?php 
                  if(class_exists('ACF')) {
                    $background = get_field('background', 'options');
                  }
                  ?>
               
                  <img src="<?php echo $background; ?>" alt="" />
            </div>
            <div class="hero-text-box">
              <h1 class="h1-big">
              
              <?php echo esc_attr(get_field('heading_one'));?>
              </h1>
              <div class="cta-input-box">
                <form action="">
                <input
                  type="text"
                  class="cta-input"
                  placeholder="Enter email adress"
                />
                <button class="btn-pink cta-button"><?php echo esc_attr(get_field('home_one_button_text'));?></button>
                </form>
              </div>
              <p class="p-text hero-contact-text">
              <?php echo esc_attr(get_field('home_subtitle'));?><span class="text-bold"> <?php echo esc_attr(get_field('home_subtitle_fat'));?></span>
              </p>
            </div>
            <div class="hero-picture-box">
              <img
                src="<?php echo esc_url(get_field('home_section_one_picture'));?>"
                alt=""
              />
            </div>
          </div>
        </section>
        <section id="colab" class="container colab-relative">
          <div class="colab-bg">
          <?php 
                  if(class_exists('ACF')) {
                    $background = get_field('background', 'options');
                  }
                  ?>
               
                  <img src="<?php echo $background; ?>" alt="" />
          </div>
          <div class="colab-container">
            <div class="colab-text-box">
              <h2 class="h2 text-white"><?php echo esc_attr(get_field('home_section_two_heading'));?></h2>
              <p class="p-text text-white">
              <?php echo esc_attr(get_field('home_section_two_paragraph'));?>
              </p>
              <a href="<?php echo esc_attr(get_field('home_section_two_button_url'));?>" class="btn-dark"><?php echo esc_attr(get_field('home_section_two_button_text'));?></a>
            </div>
            <div class="colab-logos-box">
              <?php 
              if(class_exists('ACF')) {
                $logos= get_field('home_section_two_logos');
              }
              foreach($logos as $logo){
              ?>
              <div class="logo-box">
                <img src="<?php echo $logo['logo_picture']?>" alt="" />
              </div>
              <?php 
              }
              ?>
            </div>
          </div>
        </section>
        <section id="features" class="container">
          <div class="features-container">
            <div class="feature-box-one">
              <div class="feature-img-1">
                <img
                  src="<?php echo esc_attr(get_field('home_section_three_first_feature_picture'));?>"
                  alt=""
                />
              </div>
              <div class="feature-text">
                <h2 class="h2"><?php echo esc_attr(get_field('home_section_three_first_feature_title'));?></h2>
                <p class="p-text">
                <?php echo esc_attr(get_field('home_section_three_first_feature_paragraph'));?>
                </p>
              </div>
            </div>
            <div class="feature-box-two features-relative">
              <div class="features-bg">
              <?php 
                  if(class_exists('ACF')) {
                    $background = get_field('background', 'options');
                  }
                  ?>
               
                  <img src="<?php echo $background; ?>" alt="" />
              </div>
              <div class="feature-text">
                <h2 class="h2"><?php echo esc_attr(get_field('home_section_three_second_feature_title'));?></h2>
                <p class="p-text">
                <?php echo esc_attr(get_field('home_section_three_second_feature_paragraph'));?> 
                </p>
              </div>
              <div class="feature-img-2">
                <img
                  src="<?php echo esc_attr(get_field('home_section_three_second_feature_picture'));?>"
                  alt=""
                />
              </div>
            </div>
            <div class="icons-box">
            <?php 
                  if(class_exists('ACF')) {
                    $features = get_field('home_section_three_features');
                  }
                  foreach($features as $feature){
                  ?>
              <div class="icon-item">
                <div class="icon-box">
                  <img src="<?php echo $feature['feature_image']; ?>" alt="">
                </div>
                <h3 class="h3-small text-bold text-center"><?php echo $feature['feature_title']; ?></h3>
                <p class="p-text text-center"><?php echo $feature['feature_text']; ?></p>
              </div>
             <?php 
                  }
                  ?>
            </div>
          </div>
        </section>
        <?php get_footer();?>
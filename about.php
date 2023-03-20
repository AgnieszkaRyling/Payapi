<?php 
/*
 * Template name: About template
 */
get_header(); 
?>
      <main>
        <div class="pricing-bg">
        <?php 
                  if(class_exists('ACF')) {
                    $background = get_field('background', 'options');
                  }
                  ?>
               
                  <img src="<?php echo $background; ?>" alt="" />
        </div>
        <section class="container">
          <div class="about-container">
            <div class="about-text-box">
              <h1 class="h1-small"><?php echo esc_attr(get_field('about_heading'));?></h1>
              <div>
              <?php 
                  if(class_exists('ACF')) {
                    $one_groups = get_field('about_group_one');
                  }
                  foreach($one_groups as $one_group){
                  ?>
              <div class="about-box">
                <div class="heading-box">
                  <h2 class="h2-small text-blue"><?php echo $one_group['title']; ?></h2>
                </div>
                <div class="paragraf-box">
                  <p class="p-text"><?php echo $one_group['description']; ?>/p>
                </div>
              </div>
          <?php 
                  }
                  ?>
              <div>
             </div>
            </div>
          </section>
          <section class="container section-photo">
            <div class="photo-bg">
            <?php 
                  if(class_exists('ACF')) {
                    $background = get_field('background', 'options');
                  }
                  ?>
               
                  <img src="<?php echo $background; ?>" alt="" />
            </div>
            <div class="photo-box">
              <img src="<?php echo esc_attr(get_field('about_image'));?>" alt="">
            </div>
          </section>
          <section class="container counter" >
            <div class="counter-box">
            <?php 
                  if(class_exists('ACF')) {
                    $counters = get_field('counter');
                  }
                  foreach($counters as $counter){
                  ?>
              <div class="counter-item">
                <p class="p-text"><?php echo $counter['coutner_text']; ?></p>
                <p class="text-big text-pink"><?php echo $counter['counter_number']; ?></p>
              </div>
           <?php
                  }
                  ?>
            </div>
          </section>
          <section class="container about-two">
            <div class="about-text-box">
            <?php 
                  if(class_exists('ACF')) {
                    $two_groups = get_field('about_group_2');
                  }
                  foreach($two_groups as $two_group){
                  ?>
              <div class="about-box">
                <div class="heading-box">
                  <h2 class="h2-small text-blue"><?php echo $two_group['title']; ?></h2>
                </div>
                <div class="paragraf-box">
                  <p class="p-text"><?php echo $two_group['description']; ?></p>
                </div>
              </div>
              <?php 
                  }
                  ?>
              
             </div>
          </section>
         <?php get_footer(); ?>
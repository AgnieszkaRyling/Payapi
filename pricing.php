<?php 
/*
 * Template name: pricing template
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
        <div class="container">
          <div class="pricing-container">
            <h1 class="h1-small"><?php the_title();?></h1>
            <div class="pricing-box">
            <?php
                     $args = array(
                        'order' => 'ASC',
                        'post_type' => 'plans',
                        'posts_per_page' => 3
                     );
                     $query = new WP_Query($args);
                     while( $query -> have_posts() ) {
                        $query -> the_post();
                  ?>

              <div class="col">
                <h2 class="h2-small text-pink"><?php the_title(); ?></h2>
                <p class="p-text"><?php echo esc_attr(get_field('pricing_text'))?> </p>
                <p class="text-big text-blue"><?php echo esc_attr(get_field('currency'))?><?php echo esc_attr(get_field('price'))?></p>
                <div class="border">
                  <ul class="pricing-list">
                  <?php 
                  if(class_exists('ACF')){
                    $includes = get_field('includes');
                  }
                  if (!empty($includes)) {
                    foreach ($includes as $include){
                  ?>
                    <li>
                      <div class="li-item">
                        <i class="fa-solid <?php echo $include['icon'];?>  text-pink"></i>
                        <p class="p-text"><?php echo $include['text'];?></p>
                      </div>
                    </li>
                  <?php 
                    }
                  }
                  ?>
                  <?php 
                  if(class_exists('ACF')){
                    $not_includes = get_field('not_includes');
                  }
                  if (!empty($not_includes)) {
                    foreach ($not_includes as $not_include){
                  ?>
                    <li>
                      <div class="li-item">
                        <p class="p-text text-muted"><?php echo $not_include['text'];?></p>
                      </div>
                    </li>
                  <?php 
                    }
                  }
                  ?>
                  </ul>
                </div>
                <?php 
                if(class_exists('ACF')){
                    $price_button = get_field('price_button');
                  }
                  if (!empty($price_button)) {
                    ?>
                <a href="<?php echo $price_button['url'];?>" class="btn-light"><?php echo $price_button['text'];?></a>
                <?php 
                  }
                ?>
              </div>
              <?php 
                     }
                     wp_reset_postdata();
                ?>
<!--               
              <div class="col">
                <h2 class="h2-small text-pink">Free Plan</h2>
                <p class="p-text">Build and test using our core set of products with up to 100 API requests </p>
                <p class="text-big text-blue">$0.00</p>
                <div class="border">
                <ul class="pricing-list">
                  <li>
                    <div class="li-item">
                      <i class="fa-solid fa-check  text-pink"></i>
                      <p class="p-text">Translations</p>
                    </div>
                  </li>
                  <li>
                    <div class="li-item">
                      <i class="fa-solid fa-check  text-pink"></i>
                      <p class="p-text">Auth</p>
                    </div>
                  </li>
                  <li>
                    <div class="li-item">
                      <i class="fa-solid fa-check text-pink"></i>
                      <p class="p-text">Identity</p>
                    </div>
                  </li>
                  <li>
                    <div class="li-item">
                      <p class="p-text text-muted">Inwestments</p>
                    </div>
                  </li>
                  <li>
                    <div class="li-item">
                      <p class="p-text text-muted">Assets</p>
                    </div>
                  </li>
                  <li>
                    <div class="li-item">
                      <p class="p-text text-muted">Liabilities</p>
                    </div>
                  </li>
                  <li>
                    <div class="li-item">
                      <p class="p-text text-muted">Income</p>
                    </div>
                  </li>
                </ul>
                </div>
                <a href="#" class="btn-light">Request access</a>
              </div>
              <div class="col">
                <h2 class="h2-small text-pink">Free Plan</h2>
                <p class="p-text">Build and test using our core set of products with up to 100 API requests </p>
                <p class="text-big text-blue">$0.00</p>
                <div class="border">
                <ul class="pricing-list">
                  <li>
                    <div class="li-item">
                      <i class="fa-solid fa-check  text-pink"></i>
                      <p class="p-text">Translations</p>
                    </div>
                  </li>
                  <li>
                    <div class="li-item">
                      <i class="fa-solid fa-check  text-pink"></i>
                      <p class="p-text">Auth</p>
                    </div>
                  </li>
                  <li>
                    <div class="li-item">
                      <i class="fa-solid fa-check text-pink"></i>
                      <p class="p-text">Identity</p>
                    </div>
                  </li>
                  <li>
                    <div class="li-item">
                      <p class="p-text text-muted">Inwestments</p>
                    </div>
                  </li>
                  <li>
                    <div class="li-item">
                      <p class="p-text text-muted">Assets</p>
                    </div>
                  </li>
                  <li>
                    <div class="li-item">
                      <p class="p-text text-muted">Liabilities</p>
                    </div>
                  </li>
                  <li>
                    <div class="li-item">
                      <p class="p-text text-muted">Income</p>
                    </div>
                  </li>
                </ul>
                </div>
                <a href="#" class="btn-light">Request access</a>
              </div> -->
            </div>
          </div>
        </div>
        <?php get_footer(); ?>
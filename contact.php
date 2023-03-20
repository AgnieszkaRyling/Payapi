<?php 
/*
 * Template name: contact template
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
          <div class="contact-container">
            <div class="contact-text-box">
              <h1 class="h1-small"><?php echo esc_attr(get_field('contact_heading')); ?></h1>
             </div>
              <div class="contact-box">
                <div class="form-box">
                 <?php echo do_shortcode('[contact-form-7 id="147" title="Formularz 1"]');?>
                </div>
                <div class="contact-logos-box">
                  <p class="h4 text-blue logos-heading"><?php echo esc_attr(get_field('contact_second_heading')); ?></p>
                  <div class="colab-logos-box">
                    <?php 
                    if (class_exists('ACF')){
                      $contact_logos=get_field('contact_logos');
                    }
                    foreach($contact_logos as $contact_logo){
                    ?>
                    <div class="logo-box">
                      <img src="<?php echo $contact_logo['logo'];?>" alt="" />
                    </div>
                 <?php 
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <?php get_footer(); ?>
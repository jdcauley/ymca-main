<header class="banner" role="banner">
  <section class="alert-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1 alert-col">
          <?php if ( dynamic_sidebar('alert-widget') ) ; ?>
        </div>
      </div>
    </div>
  </section>

  <section class="info-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <?php if ( get_theme_mod('ymca_main_twitter') ) : ?>
            <a class="twitter" title="twitter" href="<?php echo get_theme_mod('ymca_main_twitter'); ?>"></a>
          <?php endif; ?>
          <?php if ( get_theme_mod('ymca_main_facebook') ) : ?>
            <a class="facebook" title="facebook" href="<?php echo get_theme_mod('ymca_main_facebook'); ?>"></a>
          <?php endif; ?>
          <?php if ( get_theme_mod('ymca_main_linkedin') ) : ?>
            <a class="linkedin" title="linkedin" href="<?php echo get_theme_mod('ymca_main_linkedin'); ?>"></a>
          <?php endif; ?>
          <?php if ( get_theme_mod('ymca_main_youtube') ) : ?>
            <a class="youtube" title="youtube" href="<?php echo get_theme_mod('ymca_main_youtube'); ?>"></a>
          <?php endif; ?>
          <?php if ( get_theme_mod('ymca_main_plus') ) : ?>
            <a class="plus" title="plus" href="<?php echo get_theme_mod('ymca_main_plus'); ?>"></a>
          <?php endif; ?>
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4 col-sm-offset-4">
          <?php if ( get_theme_mod('ymca_main_phone') ) : ?>
            <a class="phone" title="phone number" href="tel:<?php echo get_theme_mod('ymca_main_phone'); ?>"><?php echo get_theme_mod('ymca_main_phone'); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <div class="header-container">
    <div class="row">
      <div class="col-sm-6">
        <?php if ( get_theme_mod('ymca_main_logo') ) : ?>
        <a class="header-brand" href="<?php echo home_url(); ?>/"><img alt="<?php bloginfo('name'); ?>" src="<?php echo get_theme_mod('ymca_main_logo'); ?>"></a>
        <?php else: ?>
        <a class="header-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
        <?php endif; ?>
      </div>
      <div class="col-sm-6">
        <h1 class="header-title"><?php bloginfo('name'); ?></h1>
        <div class="header-btns">
          <a class="btn btn-secondary" href="#">Give to the Y</a>
          <a class="btn btn-primary" href="#">Join the Y</a>
        </div>
      </div>
    </div>
  </div>

  <div class="navbar navbar-ymca">
    <div class="container">
      <nav class="">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>

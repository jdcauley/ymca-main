<header class="banner" role="banner">
  <div class="alert-bar"></div>
  <div class="container">
    <div class="info-bar">
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
        <div class="col-sm-4"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <?php if ( get_theme_mod('ymca_main_logo_upload') ) : ?>
        <a class="header-brand" href="<?php echo home_url(); ?>/"><img alt="<?php bloginfo('name'); ?>" src="<?php echo get_theme_mod('ymca_main_logo_upload'); ?>"></a>
        <?php else: ?>
        <a class="header-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
        <?php endif; ?>
      </div>
      <div class="col-sm-6"></div>
    </div>
  </div>

  <div class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <nav class="collapse navbar-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>

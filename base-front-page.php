<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
  <main class="main content wrap" role="main">

    <section class="branches">
      <div class="container">
        <div class="row">
        <?php query_posts('post_type=branches&showposts=7'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php if(get_field('branch_url')): ?>
          <a class="sevenths" href="<?php the_field('branch_url'); ?>">
          <?php else: ?>
          <a class="sevenths" href="#">
          <?php endif; ?>
            <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail('', array('class' => 'center img-circle img-responsive')); ?>
            <?php endif; ?>
            <h4 class="branch-title"><?php the_title(); ?></h4>
            <?php if(get_field('branch_address_1')): ?>
            <h5 class="branch-address"><?php the_field('branch_address_1'); ?></h5>
            <?php endif; ?>
            <?php if(get_field('branch_address_2')): ?>
            <h5 class="branch-address"><?php the_field('branch_address_2'); ?></h5>
            <?php endif; ?>
          </a>
        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
        </div>
      </div>
    </section>

    <section class="carousel">
      <div class="container">
        <div class="row">
          <div class="col-lg-12"></div>
        </div>
      </div>
    </section>

    <section class="learnmore">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
          <?php if ( get_theme_mod('ymca_btn_link_1') ) : ?>
            <a class="btn btn-default" title="twitter" href="<?php echo get_theme_mod('ymca_btn_link_1'); ?>"><?php echo get_theme_mod('ymca_btn_text_1'); ?></a>
          <?php endif; ?>
          </div>
          <div class="col-sm-3">
          <?php if ( get_theme_mod('ymca_btn_link_2') ) : ?>
            <a class="btn btn-secondary" title="twitter" href="<?php echo get_theme_mod('ymca_btn_link_2'); ?>"><?php echo get_theme_mod('ymca_btn_text_2'); ?></a>
          <?php endif; ?>
          </div>
          <div class="col-sm-3">
          <?php if ( get_theme_mod('ymca_btn_link_3') ) : ?>
            <a class="btn btn-default" title="twitter" href="<?php echo get_theme_mod('ymca_btn_link_3'); ?>"><?php echo get_theme_mod('ymca_btn_text_3'); ?></a>
          <?php endif; ?>
          </div>
          <div class="col-sm-3">
          <?php if ( get_theme_mod('ymca_btn_link_4') ) : ?>
            <a class="btn btn-primary" title="twitter" href="<?php echo get_theme_mod('ymca_btn_link_4'); ?>"><?php echo get_theme_mod('ymca_btn_text_4'); ?></a>
          <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

  </main><!-- /.main -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>

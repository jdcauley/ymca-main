<section class="widget-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <?php dynamic_sidebar('left-footer'); ?>
      </div>
      <div class="col-sm-4">
        <?php dynamic_sidebar('center-footer'); ?>
      </div>
      <div class="col-sm-4">
        <?php dynamic_sidebar('right-footer'); ?>
      </div>
    </div>
  </div>
</section>
<section class="universal-footer">
  <div class="container">
    <hr>
    <div class="row">
      <div class="col-lg-12">
        <p>The mission of the YMCA of Greensboro is to put Judeo-Christian principles into practice through programs that build a healthy spirit, mind, and body for all.</p>
        <p>The goal of the Y is to turn no one away due to an inability to pay. Find out more about supporting or receiving help through our <a title="We Build People" href="#">We Build People Program</a></p>
        <h4>Visit our other Y Branches in the Greater Greensboro Area</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <?php
          if (has_nav_menu('universal_navigation')) :
            wp_nav_menu(array('theme_location' => 'universal_navigation', 'menu_class' => 'universal-menu'));
          endif;
        ?>
      </div>
    </div>
  </div>
</section>
<footer class="copyright" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer>

<?php wp_footer(); ?>

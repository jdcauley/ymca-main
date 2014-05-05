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
<footer class="copyright" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer>

<?php wp_footer(); ?>

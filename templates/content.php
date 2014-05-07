<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <?php if (has_post_thumbnail()): ?>
    <div class="row">
      <div class="col-sm-4">
        <?php the_post_thumbnail('', array('class' => 'center img-responsive')); ?>
      </div>
      <div class="col-sm-8">
        <div class="entry-summary">
          <?php the_excerpt(); ?>
        </div>
      </div>
    </div>
  <?php else: ?>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
  <?php endif; ?>
</article>

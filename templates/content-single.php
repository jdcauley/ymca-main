<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php previous_post_link('%link', '<span class="glyphicon glyphicon-chevron-left"></span> Previous'); ?> | <?php next_post_link('%link', 'Next <span class="glyphicon glyphicon-chevron-right"></span>'); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>

<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <?php get_template_part('templates/hero','post') ?>
    <div class="single__content ps row container">
      <div class="columns xlarge-10 xlarge-centered xxlarge-8">
        <?php the_content(); ?>
      </div>
    </div>
    <footer class="single__footer row container">
      <div class="columns">
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
      </div>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>

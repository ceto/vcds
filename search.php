<?php get_template_part('templates/hero', 'page'); ?>

<?php if (!have_posts()) : ?>
  <section class="ps">
    <div class="row container">
      <div class="columns medium-6 medium-centered large-6">
        <div class="alert alert-warning">
          <?php _e('Sorry, no results were found.', 'sage'); ?>
        </div>
        <?php get_search_form(); ?>
      </div>
    </div>
  </section>
<?php else: ?>

<section class="postlist">
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content'); ?>
  <?php endwhile; ?>
  <?php the_posts_navigation(); ?>
</section>

<?php endif; ?>
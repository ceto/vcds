<?php get_template_part('templates/hero', 'page'); ?>

<section class="ps">
  <div class="row container">
    <div class="columns medium-6 medium-centered large-6">
      <div class="alert alert-warning">
        <?php _e('Sorry, but the page you were trying to view does not exist.', 'sage'); ?>
      </div>

      <?php get_search_form(); ?>
    </div>
  </div>
</section>


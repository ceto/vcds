<?php dynamic_sidebar('sidebar-primary'); ?>

<section class="ps">
  <div class="row container">
    <div class="columns">
      <?php the_content(); ?>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </div>
  </div>
</section>
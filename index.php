<?php
  use Roots\Sage\Setup;
  use Roots\Sage\Wrapper;
?>
<?php get_template_part('templates/hero', 'page'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php if ( is_archive() || is_home() || is_search() ) : ?>
<section class="postlist">
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
  <?php endwhile; ?>
</section>
<?php else: ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php the_posts_navigation(); ?>

<?php if (Setup\display_sidebar()) : ?>
  <aside class="sidebar">
    <?php include Wrapper\sidebar_path(); ?>
  </aside><!-- /.sidebar -->
<?php endif; ?>


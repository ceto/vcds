<?php
  use Roots\Sage\Setup;
  use Roots\Sage\Wrapper;
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/hero', 'page'); ?>
  <?php if (Setup\display_sidebar()) : ?>
    <aside class="sidebar">
      <?php include Wrapper\sidebar_path(); ?>
    </aside><!-- /.sidebar -->
  <?php endif; ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

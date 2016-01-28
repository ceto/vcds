<?php
  use Roots\Sage\Setup;
  use Roots\Sage\Wrapper;
?>
<?php get_template_part('templates/content-single', get_post_type()); ?>
<?php if (Setup\display_sidebar()) : ?>
  <aside class="sidebar">
    <?php include Wrapper\sidebar_path(); ?>
  </aside><!-- /.sidebar -->
<?php endif; ?>

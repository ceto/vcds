<?php
/**
 * Template Name: Children Lister
 */

  use Roots\Sage\Setup;
  use Roots\Sage\Wrapper;
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/hero', 'page'); ?>
  <?php
    $the_children = new WP_Query( array(
      'post_parent'  => get_the_ID(),
      'post_type' => array('page'),
      'nopaging' => true,
      'posts_per_page' => -1
    ));
  ?>
  <section class="ps <?php // echo (++$i%2==0)?'ps--light':''; ?>">
    <div class="row container">
      <div class="columns content">
        <ul class="small-block-grid-1 medium-block-grid-2">
          <?php while ($the_children->have_posts()) : $the_children->the_post() ?>
            <li><section class="tocblock">
              <h2 class="tocblock__title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
              <?php if ( get_post_meta( get_the_ID(), 'page_repeat_group', true ) ):?>
                <ul class="menu menu--tocblock">
                  <?php $pageblocks = get_post_meta( get_the_ID(), 'page_repeat_group', true ); ?>
                  <?php foreach ( (array) $pageblocks as $key => $entry ) : ?>
                    <li><a href="<?php the_permalink(); ?>#<?= sanitize_title( $entry['title'] ); ?>"><?= $entry['title']; ?></a></li>
                  <?php endforeach; ?>
                </ul>
                <?php reset($pageblocks); ?>
              <?php endif;?>
              <!-- <a href="<?php the_permalink(); ?>" class="tocblock__more">Téma kibontása</a> -->
            </section></li>
          <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </section>
  <?php wp_reset_query(); ?>
<?php endwhile; ?>
<?php if (Setup\display_sidebar()) : ?>
  <aside class="sidebar">
    <?php include Wrapper\sidebar_path(); ?>
  </aside><!-- /.sidebar -->
<?php endif; ?>

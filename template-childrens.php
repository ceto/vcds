<?php
/**
 * Template Name: Children Lister
 */
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
  <?php while ($the_children->have_posts()) : $the_children->the_post() ?>
    <section class="ps">
      <div class="row container">
        <div class="columns medium-4">
          <figure>
            <a href="<?php the_permalink(); ?>"><img src="http://placehold.it/600x600" alt="<?php the_title(); ?>"></a>
          </figure>

        </div>
        <div class="columns medium-8">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
          <ul>
            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
            <li><a href="#">Hogyan lehet cursus commodo</a></li>
            <li><a href="#">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</a></li>
            <li><a href="#">Nullam quis risus eget urna mollis ornare vel eu leo</a></li>
            <li><a href="#">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</a></li>
          </ul>
          <a href="#" class="button small">Téma kibontása</a>
        </div>

      </div>
    </section>
  <?php endwhile; ?>

  <?php wp_reset_query(); ?>

<?php endwhile; ?>

<?php
/**
 * Template Name: Accordion Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/hero', 'subpage'); ?>
  <section class="ps ps--nopad">
    <div class="row container">

      <div class="columns">
        <div class="row">
          <div class="columns large-3 sidebar">
              <?php
                $actpageid = $post->ID;
                $the_parents = new WP_Query( array(
                  'post_parent'  => $post->post_parent,
                  'post_type' => array('page'),
                  'nopaging' => true,
                  'posts_per_page' => -1
                ));

              ?>
            <nav class="sidebarnav">
              <h3>Dokumentáció</h3>
              <ul class="menu menu--sidebar">
                <?php while ($the_parents->have_posts()) : $the_parents->the_post() ?>
                  <li <?= ($post->ID == $actpageid)?'class="active"':''; ?>>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php if ( ($post->ID == $actpageid) && get_post_meta( get_the_ID(), 'page_repeat_group', true ) ):?>
                      <ul class="menu sub-menu" data-magellan-expedition>
                        <?php $pageblocks = get_post_meta( get_the_ID(), 'page_repeat_group', true ); ?>
                        <?php foreach ( (array) $pageblocks as $key => $entry ) : ?>
                          <li data-magellan-arrival="<?= sanitize_title( $entry['title'] ); ?>"><a href="#<?= sanitize_title( $entry['title'] ); ?>"><?= $entry['title']; ?></a></li>
                        <?php endforeach; ?>
                      </ul>
                      <?php reset($pageblocks); ?>
                    <?php endif;?>
                  </li>
                <?php endwhile; ?>
                <?php wp_reset_query()?>

              </ul>
            </nav>
          </div>
          <div class="columns large-9 content">
            <?php if ( isset($pageblocks) ) : ?>
             <?php foreach ( (array) $pageblocks as $key => $entry ) : ?>
                <article class="faq" data-magellan-destination="<?= sanitize_title( $entry['title'] ); ?>" name="<?= sanitize_title( $entry['title'] ); ?>" id="<?= sanitize_title( $entry['title'] ); ?>">
                  <h2 class="faq__title"><?= $entry['title']; ?></h2>
                  <div class="faq__content">
                    <?= wpautop( $entry['content'] ); ?>
                  </div>
                </article>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
     </div>


    </div>
  </section>






<?php endwhile; ?>

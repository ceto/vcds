<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/hero', 'home'); ?>


  <section class="ps">
    <div class="row container">
      <div class="columns content">
        <div class="row">
          <div class="columns medium-6 large-6">
            <?= wpautop(get_post_meta( get_the_ID(), '_cmb_intro', true )); ?>
          </div>
        </div>
      </div>
    </div>
  </section>




  <section class="ps ps--inverse home__vag">
    <div class="row container">
      <div class="columns content">
        <div class="row">
          <div class="columns large-push-6 large-6">
            <?= wpautop(get_post_meta( get_the_ID(), '_cmb_content2', true )); ?>
          </div>
          <div class="columns large-6 large-pull-6">
            <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-2 xxlarge-block-grid-3 gallery gallery--vag">
              <li>
                <a class="gallery__item" href="http://placehold.it/1600x1200/cecece" title="KII-USB csatoló">
                  <img src="http://placehold.it/640x480/cecece" alt="">
                </a>
              </li>
              <li>
                <a class="gallery__item" href="http://placehold.it/1600x1200/2a2a2a" title="HEX-USB+CAN csatoló">
                  <img src="http://placehold.it/640x480/2a2a2a" alt="">
                </a>
              </li>
            </ul>
          </div>

        </div>

      </div>
    </div>
  </section>

  <section class="ps aps--inverse ahome__vag">
    <div class="row container">
      <div class="columns content">
        <?= wpautop(get_post_meta( get_the_ID(), '_cmb_content3', true )); ?>
      </div>
    </div>
  </section>

  <?php dynamic_sidebar('sidebar-primary'); ?>

<?php endwhile; ?>

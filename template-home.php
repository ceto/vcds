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

  <section class="ps ps--light aps--inverse ahome__vag">
    <div class="row container">
      <div class="columns content">
        <?= wpautop(get_post_meta( get_the_ID(), '_cmb_content3', true )); ?>
      </div>
    </div>
  </section>

  <section class="ps">
    <div class="row container">
      <div class="columns content">
        <div class="row">
          <div class="columns medium-7 large-8">
            <h2>Magyar nyelvű szoftver</h2>
            <p>Windows operációs rendszeren futó program ingyen letölthető oldalunkról. Tartalmazza az összes frissítést és a legújabb kódokat. <strong>Kizárólag eredeti csatolóval működik.</strong> Amennyiben nem rendelkezik csatolóval a <a href="#">forgalmazónál</a> megvásárolhatja.</p>
            <p><small>Minimális rendszerkövetelmény: Pentium III 1GHz, 256 MB RAM, Windows XP/Vista/7/8/10</small></p>
          </div>
          <div class="columns medium-5 large-4">
            <div class="widget widget--dl">
              <a class="dldldl" href="#"><img src="<?= get_template_directory_uri(); ?>/dist/images/dl.png" alt="Letöltés"><br>
              VCDS-HGJ szoftver letöltése</a>
              <p><small>Verzió: 15.7.1 | Kiadás: 2015.09.04.</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php endwhile; ?>

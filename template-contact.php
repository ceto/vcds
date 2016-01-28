<?php
/**
 * Template Name: Contact Template
 */
  use Roots\Sage\Setup;
  use Roots\Sage\Wrapper;
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/hero', 'page'); ?>


  <section class="ps">
    <div class="row container">
      <div class="columns content">
        <div class="row">
          <div class="columns medium-6 large-6">
            <?php the_content(); ?>
          </div>

          <div class="columns medium-6 large-6">
            <?= wpautop(get_post_meta( get_the_ID(), '_cmb_content2', true )); ?>
          </div>

        </div>
      </div>
    </div>
  </section>




  <section class="ps ps--inverse">
    <div class="row container">
      <div class="columns">
        <h1>Térkép lesz itt</h1>
        <h2>Kell egyáltalán?</h2>
        <p>M3 Autónak egy pontja van az meg kinn van az oldalukon</p>
      </div>
    </div>
  </section>



  <section class="ps">
    <div class="row container">
      <div class="columns">
        <div class="row">
          <div class="columns medium-8 medium-centered large-6 content">
            <h2>Segíthetünk?</h2>
            <p>Írjon nekünk űrlapunkon keresztül. A termékkel kapcsolatban bármilyen segítségnyújtásban szívesen állunk rendelkezezésére.</p>
            <form>
              <div class="row">
                <div class="columns">
                  <label>Név
                    <input type="text" placeholder="Adja meg nevét (kötelező)" />
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="columns">
                  <label>Email
                    <input type="email" placeholder="Email címét (kötelező)" />
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="columns">
                  <label>Telefon
                    <input type="tel" placeholder="Telefon" />
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="columns">
                  <label>Üzenet
                    <textarea placeholder="Kezdejen el írni" rows="6"></textarea>
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="columns text-center">
                  <button type="submit" class="button small expand">Küldés</button>
                </div>
              </div>
            </form>

            <p><small>Köszönjük érdeklődését. Munkatársunk hamarosan megkeresi Önt a megadott elérhetőségek egyikén.</small></p>
          </div>

        </div>
      </div>
    </div>
  </section>
<?php endwhile; ?>

<?php if (Setup\display_sidebar()) : ?>
  <aside class="sidebar">
    <?php include Wrapper\sidebar_path(); ?>
  </aside><!-- /.sidebar -->
<?php endif; ?>
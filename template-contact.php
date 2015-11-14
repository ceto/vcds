<?php
/**
 * Template Name: Contact Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/hero', 'page'); ?>


  <section class="ps">
    <div class="row container">
      <div class="columns">
        <div class="row">
          <div class="columns medium-6 large-6">
            <h2>Termékinformációk, segítségnyújtás</h2>
            <p>
              <strong>Molnár Szilveszter</strong><br>
              <em>VCDS honosítója</em>
            </p>
            <p><strong>Elérhetőség</strong><br>
            Telefon: <a href="tel:+36 1 306 3203">+36 1 306 3203</a><br>
            Email: <a href="mailto:moszi@vcds.hu">moszi@vcdss.hu</a>
            </p>
            <a href="#" class="button small">Üzenet küldése</a>
          </div>

          <div class="columns medium-6 large-6">
            <h2>Vásárlás</h2>
            <p>
              <strong>Auto M3 Kft.</strong><br>
              <em>magyarországi forgalmazó</em>
            </p>
            <p>
              <strong>Cím</strong><br>
              1154 Budapest,<br>
              Tompa Mihály u. 76.
            </p>
            <p><strong>Kapcsolatfelvétel</strong><br>
              Telefon: <a href="tel:+36 1 306 3203">+36 1 306 3203</a><br>
              Mobil: <a href="tel:+36 1 306 3203">+36 1 306 3203</a>
            </p>
            <p>További információk a <a href="http://am3.hu">forgalmazó honlapján.</a>
            </p>
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
          <div class="columns medium-8 medium-centered">
            <h2>Segíthetünk?</h2>
            <p>Írjon nekünk űrlapunkon keresztül. A termékkel kapcsolatban bármilyen segítségnyújtásban szívesen állunk rendelkezezésére.</p>

            <h1>Ürlap helye</h1>
            <h2>Kell ez? Fog rá valaki válaszolni</h2>
            <p>vagy egyáltalán ebben a témában van értelme kapcsolatfelvételi űrlapnak. Fogja vlaki használni?</p>
            <p><small>Köszönjük érdeklődését. Munkatársunk hamarosan megkeresi Önt a megadott elérhetőségek egyikén.</small></p>
          </div>

        </div>
      </div>
    </div>
  </section>




<?php endwhile; ?>

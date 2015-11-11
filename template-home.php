<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/hero', 'home'); ?>
  <section class="ps">
    <div class="row container">
      <div class="columns">
        <div class="row">
          <div class="columns medium-7 large-8">
            <h2>Autodiagnosztikai szoftver</h2>
            <p>A <strong>VCDS</strong> egy Windows alapú hatékony autódiagnosztikai eszköz Volkswagen, Audi, Seat, Skoda gépjárművekhez. A magyar nyelvű szoftver tartalmazza az összes frissítést és a legújabb kódokat. Kizárólag <a href="#">eredeti csatolóval</a> működik.</p>
            <a href="#" class="button small">Szoftver funkciók bemutatása</a>
          </div>
          <div class="columns medium-5 large-4">
            <p>Letöltés orem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p><small>Minimális rendszerkövetelmény: Pentium III 1GHz, 256 MB RAM, Windows XP/Vista/7/8/10</small></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ps ps--inverse home__vag">
    <div class="row container">
      <div class="columns">
        <div class="row">
          <div class="columns large-push-6 large-6">
            <h2>Eredeti VAG-COM csatoló</h2>
            <p>A VCDS autodiagnosztikai szoftver funkciói, kizárólag az eredeti HEX-CAN csatolóval működnek teljeskörűen. Az eredeti csatoló használatának előnyei</p>
            <ul>
              <li><strong>Korlátlanul frissíthető</strong> magyar nyelvű szoftver licensz</li>
              <li><strong>18003 hibakódot</strong> tartalmazó adatbázis</li>
              <li><strong>7 számjegyű PIN/SCK kódok</strong> kezelése</li>
              <li>Adatok megjelenítése, mentése és grafikon készytése egyszerre <strong>3 mérőcsoport paramétereivel</strong></li>
              <li><strong>KWP-2000 protokoll</strong> kezelése.</li>
              <li><strong>ODX/ASAM csomagok</strong> frissítve</li>
              <li>Javított kommunikáció a régebbi modellekkel</li>
              <li>Akkumulátor kódolás</li>
            </ul>
            <a href="#" class="button small">Hol kapható</a>
          </div>
          <div class="columns large-6 large-pull-6">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum perferendis enim ipsam quo illum dicta necessitatibus cumque.
          </div>

        </div>

      </div>
    </div>
  </section>




<?php endwhile; ?>

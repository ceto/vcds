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
          <div class="columns medium-6 large-6">
            <h2>Autódiagnosztikai rendszer</h2>
            <p>A VCDS a VAG csoport gépjárműveinek diagnosztizálását teszi lehetővé. <strong> Windos alapú szoftver</strong> amely az erre a célra gyártott <strong>hardveres csatolón</strong> keresztül kommunikál a személygépkocsik elektronikus vezérlőegységeivel.
            </p>
            <p>A rendszer lehetőséget biztosít a hibakódok lekérdezésere, törlésére. Továbbá a mért értékek olvasása nélkülözhetetlen segítséget nyújt az autójavításban.
            </p>
            <a href="#" class="button small">Funkciók bemutatása</a>
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
            <h2>Eredeti VCDS csatoló</h2>
            <p>Az autodiagnosztikai szoftver funkciói, kizárólag az eredeti HEX-CAN csatolóval működnek teljeskörűen. Az eredeti csatoló használatának előnyei</p>
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

  <section class="ps">
    <div class="row container">
      <div class="columns">
        <div class="row">
          <div class="columns medium-7 large-8">
            <h2>Magyar nyelvű szoftver</h2>
            <p>Windows operációs rendszeren futó program ingyen letölthető oldalunkról. Tartalmazza az összes frissítést és a legújabb kódokat. <strong>Kizárólag eredeti csatolóval működik.</strong> Amennyiben nem rendelkezik csatolóval a <a href="#">forgalmazónál</a> megvásárolhatja.</p>
            <p><small>Minimális rendszerkövetelmény: Pentium III 1GHz, 256 MB RAM, Windows XP/Vista/7/8/10</small></p>
          </div>
          <div class="columns medium-5 large-4">
            <p>Letöltés orem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php endwhile; ?>

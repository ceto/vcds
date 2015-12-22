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
      <div class="columns content">
        <div class="row">
          <div class="columns large-push-6 large-6">
            <h2>Eredeti VCDS csatoló</h2>
            <p>Az autodiagnosztikai szoftver funkciói, kizárólag az eredeti csatolóval működnek teljeskörűen. Az eredeti csatoló használatának előnyei</p>
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
        <div class="row">
          <div class="columns ">
            <h2>Megvásárolható csatolók</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p>&nbsp;</p>
          </div>
        </div>
        <div class="row">
          <div class="columns medium-4">
            <p><img src="http://placehold.it/600x300" alt=""></p>
            <h3>KII-USB</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod doloremque, inventore neque autem omnis consectetur quia, pariatur atque.</p>
          </div>
          <div class="columns medium-4">
            <p><img src="http://placehold.it/600x300" alt=""></p>
            <h3>Micro-CAN </h3>
            <p>Consectetur adipisicing elit. Quod doloremque, inventore neque autem omnis consectetur quia, pariatur atque ratione accusantium sit, laborum!</p>
          </div>
          <div class="columns medium-4">
            <p><img src="http://placehold.it/600x300" alt=""></p>
            <h3>HEX-USB+CAN</h3>
            <p>Quod doloremque, inventore neque autem omnis consectetur quia, pariatur atque ratione accusantium sit, laborum! A ut ad dolorum adipisci tenetur. Harum, quia?</p>
          </div>
        </div>
        <div class="row">
          <div class="columns">
            <a href="#" class="button small">Csatolók összehasonlítása</a>
          </div>
        </div>

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

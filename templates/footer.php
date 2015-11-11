<footer class="sitefooter">
  <section class="sitefooter__fat">
    <div class="row container">
      <div class="columns medium-4">
        <div class="widget widget--footer">
          <h3 class="widget__title">Megvásárolható</h3>
          <p>
            <strong>Auto M3 Kft.</strong><br>
            1154 Budapest,<br>
            Tompa Mihály u. 76.
          </p>
          <p>Telefon: <a href="tel:+36 1 306 3203">+36 1 306 3203</a>
          </p>
        </div>
      </div>
      <div class="columns medium-4">
        <div class="widget widget--footer">
          <h3 class="widget__title">Helpdesk</h3>
          <p>
            <strong>Molnár Szilveszter</strong><br>
            <em>VCDS magyarországi gondozója</em>
          </p>
          <p>Telefon: <a href="tel:+36 1 306 3203">+36 1 306 3203</a><br>
          Email: <a href="mailto:moszi@vcds.hu">moszi@vcdss.hu</a>
          </p>
        </div>
      </div>
      <div class="columns medium-4">
        <div class="widget widget--footer">
          <h3 class="widget__title">Segédletek</h3>
          <nav class="sitenav">
            <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu menu--footernav']);
            endif;
            ?>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <section class="sitefooter__narrow">
    <div class="row container">
      <div class="columns medium-8">
        &copy; 2015 Molnár Szilveszter &middot; Minden jog fenntartva!</a>
      </div>
      <div class="columns medium-4 copy">Handmade by <a href="http://hydrogene.hu">HYDROGENE</a></div>
    </div>
  </section>
</footer>



<?php //dynamic_sidebar('sidebar-footer'); ?>
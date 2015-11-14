<footer class="sitefooter">
  <section class="sitefooter__fat">
    <div class="row container">
      <div class="columns medium-4">
        <div class="widget widget--footer">
          <h3 class="widget__title">Megvásárolható</h3>
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
        </div>
      </div>
      <div class="columns medium-4">
        <div class="widget widget--footer">
          <h3 class="widget__title">Helpdesk</h3>
          <p>
            <strong>Molnár Szilveszter</strong><br>
            <em>VCDS honosítója</em>
          </p>

          <p><strong>Elérhetőség</strong><br>
          Telefon: <a href="tel:+36 1 306 3203">+36 1 306 3203</a><br>
          Email: <a href="mailto:moszi@vcds.hu">moszi@vcdss.hu</a>
          </p>
        </div>
      </div>
      <div class="columns medium-4">
        <div class="widget widget--footer">
          <h3 class="widget__title">Segédletek</h3>
          <nav class="footernav">
            <?php
                $the_bparents = new WP_Query( array(
                  'post_parent'  => 8,
                  'post_type' => array('page'),
                  'nopaging' => true,
                  'posts_per_page' => -1
                ));
            ?>
            <ul class="menu menu--footernav">
              <?php while ($the_bparents->have_posts()) : $the_bparents->the_post() ?>
                <li <?= ($post->ID == $actpageid)?'class="active"':''; ?>>
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
            </ul>

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
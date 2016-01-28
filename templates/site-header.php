<header class="siteheader">
  <div class="row container">
    <div class="columns medium-3">
      <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?><span><?php bloginfo('description'); ?></span></a>
      <label for="navtoggle" class="menutoggler">MENÜ</label>
    </div>
    <div class="columns medium-9">
      <input type="checkbox" class="navtoggle" id="navtoggle" name="navtoggle">
      <nav class="sitenav">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu menu--sitenav']);
        endif;
        ?>
      </nav>
    </div>
  </div>
</header>

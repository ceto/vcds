<?php
/**
 * Template Name: Accordion Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/hero', 'page'); ?>
  <section class="ps">
    <div class="row container">

      <div class="columns medium-10 medium-centered">
        <h2>Milyen előnyei vannak az eredeti csatolónak</h2>
        <p>A <strong>VCDS</strong> egy Windows alapú hatékony autódiagnosztikai eszköz Volkswagen, Audi, Seat, Skoda gépjárművekhez. A magyar nyelvű szoftver tartalmazza az összes frissítést és a legújabb kódokat. Kizárólag <a href="#">eredeti csatolóval</a> működik.</p>
        <h2>Hogyan tudom telepíteni</h2>
        <p>Letöltés orem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint cumque minima blanditiis soluta dolor quibusdam, aperiam sunt corporis provident eaque laborum excepturi magnam, neque ratione repudiandae fugit nesciunt iure veniam.</p>
        <h2>Hogyan tudom telepíteni</h2>
        <p>Letöltés orem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint cumque minima blanditiis soluta dolor quibusdam, aperiam sunt corporis provident eaque laborum excepturi magnam, neque ratione repudiandae fugit nesciunt iure veniam.</p>
      </div>

    </div>
  </section>






<?php endwhile; ?>

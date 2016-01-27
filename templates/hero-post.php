<?php use Roots\Sage\Titles; ?>
<?php if (has_post_thumbnail()) : ?>
  <?php
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    $url = $thumb['0'];
  ?>
  <style>
  .hero__block {
    background-image: url(<?=$url ?>);
  }
  </style>
<?php endif; ?>

<header class="hero hero--narrow" role="banner">
  <div class="hero__content">
    <div class="hero__block">
      <div class="hero__text">
        <div class="row container">
          <div class="columns xlarge-10 xlarge-centered xxlarge-8">
            <div class="sunyi"><?php get_template_part('templates/entry-meta'); ?></div>
            <h1 class="hero__title"><?= Titles\title(); ?></h1>
          </div><!-- /.columns -->
        </div><!-- /.row -->
      </div><!-- /.hero__text -->
    </div><!-- /.hero__block -->
  </div><!-- /.hero__content -->
</header>

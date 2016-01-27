<article <?php post_class('ps'); ?>>
  <div class="row container">
    <div class="columns xxlarge-10 large-centered">
      <div class="row">
        <div class="columns medium-3">
          <figure class="post__thumbnail">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('medium'); ?>
            </a>
          </figure>
        </div>
        <div class="columns medium-9">
          <header>
            <h2 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php get_template_part('templates/entry-meta'); ?>
          </header>
          <div class="post__summary">
            <?php the_excerpt(); ?>
          </div>
        </div>

      </div>
    </div>
  </div>
</article>

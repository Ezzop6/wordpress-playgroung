<div class="search-card-container">
  <a href="<?php the_permalink(); ?>">
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail(); ?>
  </a>
  <div>
    <p><?php the_excerpt(); ?></p>
  </div>
</div>

<div class="post-container">
  <div>
    <small><?php the_category(' '); ?> | <?php the_tags(); ?> | <?php edit_post_link(); ?></small>
    <hr class="divider">
  </div>

  <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt=" <?php the_title(); ?>">
  <h3><?php the_title() ?></h3>
  <p><?php the_excerpt(); ?></p>

  <div>
    <hr class="divider">
    <span class="text-divider">
      <a class="link-button" href="<?php the_permalink(); ?>">Read More</a>
    </span>
  </div>
</div>

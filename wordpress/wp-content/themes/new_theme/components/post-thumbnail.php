<div class="thumbnail-container">

  <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt=" <?php the_title(); ?>">
  <h1><?php the_title() ?></h1>
  <p><?php the_excerpt(); ?></p>
  <a href="<?php the_permalink(); ?>">Read More</a>

</div>

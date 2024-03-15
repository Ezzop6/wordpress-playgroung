<?php get_header(); ?>

<h1>Archive-Portfolio.php</h1>
<?php if (have_posts())
  while (have_posts()) : the_post(); ?>
  <h2><?php the_title() ?></h2>
  <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
  <?php if (has_post_thumbnail()) : ?>
    <div class="thumbnail"><?php the_post_thumbnail('medium'); ?></div>
  <?php endif; ?>
  <p><?php the_content(); ?></p>
<?php endwhile; ?>
</div>

</div>
</div>

<?php get_footer(); ?>

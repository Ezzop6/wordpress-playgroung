<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
  <?php endwhile; ?>
<?php else : ?>
  <h1>No Results</h1>
  <p>Sorry, no results were found.</p>
<?php endif; ?>

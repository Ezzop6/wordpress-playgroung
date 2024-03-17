<?php get_header(); ?>

<div class="flex-grow my-10 mx-24">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <p><?php the_content(); ?></p>
    <?php endwhile;
  else : ?>
    <h1>No Results</h1>
    <p>Sorry, no results were found.</p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>

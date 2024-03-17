<?php get_header(); ?>
<main class="flex-grow flex mt-10 mx-24">
  <div class="flex-grow mr-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/card') ?>
      <?php endwhile;
    else : ?>
      <h1>No Results</h1>
      <p>Sorry, no results were found.</p>
    <?php endif; ?>
  </div>
  <div class="sidebar mb-10">
    <?php dynamic_sidebar('sidebar'); ?>
  </div>
</main>
<?php get_footer(); ?>

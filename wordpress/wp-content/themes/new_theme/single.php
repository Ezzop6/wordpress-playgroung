<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="container-wrapper">
      <?php the_content() ?>
      <?php get_template_part('components/post-navigation'); ?>
    </div>
  <?php endwhile;
else : ?>
  <h1>No Results</h1>
  <p>Sorry, no results were found.</p>
<?php endif; ?>

<?php get_footer(); ?>

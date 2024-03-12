<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <small><?php the_category(' '); ?> | <?php the_tags(); ?> | <?php edit_post_link(); ?></small>

    <p><?php the_content(); ?></p>
  <?php endwhile;
  get_template_part('components/post-navigation');
else : ?>
  <h1>No Results</h1>
  <p>Sorry, no results were found.</p>
<?php endif; ?>

<?php get_footer(); ?>

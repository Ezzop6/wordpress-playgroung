<?php get_header() ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="post-container">
      <small><?php the_category(' '); ?> | <?php the_tags(); ?> | <?php edit_post_link(); ?></small>
      <?php if (has_post_thumbnail()) {
        get_template_part('components/post-thumbnail');
      } ?>
    </div>

  <?php endwhile;
  get_template_part('components/post-navigation');
else : ?>
  <h1>No Results</h1>
  <p>Sorry, no results were found.</p>
<?php endif; ?>

<?php get_footer() ?>

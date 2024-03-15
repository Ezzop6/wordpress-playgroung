<?php get_header() ?>

<div class="post-container-wrapper">
  <?php
  $query_args = array(
    'post_type' => 'post',
    'posts_per_page' => '4',
  );
  $the_query = new WP_Query($query_args);

  if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
      $the_query->the_post();
      get_template_part('components/post-thumbnail');
    }
    wp_reset_postdata();
  } else {
    // no posts found
  } ?>

</div>

<?php get_footer() ?>

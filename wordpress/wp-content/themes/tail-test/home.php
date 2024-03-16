<?php get_header(); ?>

<main class="flex-grow flex my-10 mx-24">
  <div class="flex-grow mr-5">
    <?php get_template_part('templates/search') ?>
  </div>
  <div class="sidebar">
    <?php dynamic_sidebar('sidebar'); ?>
  </div>
</main>
<?php get_footer(); ?>

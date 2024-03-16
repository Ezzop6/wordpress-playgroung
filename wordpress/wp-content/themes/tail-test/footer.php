<footer class="footer-container py-2">

  <section>
    <?php wp_nav_menu(
      array(
        'theme_location' => 'footer',
        'container' => 'nav',
        'container_class' => 'footer-menu'
      )
    )  ?>
  </section>
  <?php dynamic_sidebar('footer-contact'); ?>
  <hr>
  <p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>

</footer>
<?php wp_footer(); ?>
</body>

</html>

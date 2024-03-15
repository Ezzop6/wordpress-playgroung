<footer>

  <div class="footer-menu">
    <?php wp_nav_menu(
      array(
        'theme_location' => 'footer',
        'container' => 'nav',
        'container_class' => 'footer-menu'
      )
    )  ?>
  </div>

  <div class="footer-info">
    <div class="text-divider">
      <p>&copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?></p>
    </div>
  </div>

</footer>
<?php wp_footer(); ?>
</body>

</html>

<footer>
  <p>Theme Two Footer and menu</p>
  <?php wp_nav_menu(
    array(
      'theme_location' => 'footer',
      'container' => 'nav',
      'container_class' => 'footer-menu'
    )
  )  ?>
</footer>
<?php wp_footer(); ?>
</body>

</html>

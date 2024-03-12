<footer>
  <p>Theme Two Footer and menu</p>

  <div class="footer-menu">

    <?php wp_nav_menu(
      array(
        'theme_location' => 'footer',
        'container' => 'nav',
        'container_class' => 'footer-menu'
      )
    )  ?>

  </div>

</footer>
<?php wp_footer(); ?>
</body>

</html>

<footer class="bg-grigio-scuro">
  <div class="container p-5 mx-auto text-center">
    <?php dynamic_sidebar('footer'); ?>
  </div>

  <?php
    wp_nav_menu([
      'menu'            => 'menu-social',
      'theme_location'  => 'menu-social',
      'container'       => 'div',
      'container_id'    => 'bs4navbar_social',
      'container_class' => 'd-flex justify-content-center',
      'menu_id'         => false,
      'menu_class'      => 'nav',
      'depth'           => 0,
      'fallback_cb'     => 'bs4navwalker::fallback',
      'walker'          => new bs4navwalker()
    ]);
   ?>
   <div class="lineaverde mb-2"></div>
   <?php
     wp_nav_menu([
       'menu'            => 'menu-footer',
       'theme_location'  => 'menu-footer',
       'container'       => 'div',
       'container_id'    => 'bs4navbar_social',
       'container_class' => 'd-flex justify-content-center',
       'menu_id'         => false,
       'menu_class'      => 'nav',
       'depth'           => 0,
       'fallback_cb'     => 'bs4navwalker::fallback',
       'walker'          => new bs4navwalker()
     ]);
    ?>
</footer>
<?php wp_footer();?>
</body>
</html>

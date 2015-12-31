<div class="sidebar">
  <?php get_template_part( 'shared/twitter-module' ); ?>
  <aside>
    <h3>Find Out More</h3>
    <?php
      wp_nav_menu(array(
        'menu' => 'Sidebar Navigation',
        'container' => false,
        'items_wrap' => '<ul>%3$s</ul>',
        'depth' => 1
      ));
    ?>
  </aside>
</div>
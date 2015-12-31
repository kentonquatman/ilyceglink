<div class="sidebar">
  <?php get_template_part( 'shared/twitter-module' ); ?>
  <aside class="categories">
    <h3>Media Types</h3>
    <ul>
      <?php
        $args = array(
          'taxonomy' => 'media-type',
          'orderby' => 'count',
          'title_li' => __( '' ),
        );
        wp_list_categories( $args );
      ?>
    </ul>
  </aside>
</div>
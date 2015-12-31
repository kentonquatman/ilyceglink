<div class="sidebar">
  <?php get_template_part( 'shared/twitter-module' ); ?>
  <aside class="categories">
    <h3>Categories</h3>
    <ul>
      <?php
        $args = array(
          'orderby' => 'count',
          'title_li' => __( '' ),
        );
        wp_list_categories( $args );
      ?>
    </ul>
  </aside>
  <aside class="monthly-archive">
    <h3>Archive</h3>
    <ul>
      <?php
        $args = array(
        	'type' => 'monthly',
        	'limit' => '24',
        	'format' => 'html', 
        	'echo' => 1,
        	'order' => 'DESC'
        );
        wp_get_archives( $args );
      ?>
    </ul>
  </aside>
</div>
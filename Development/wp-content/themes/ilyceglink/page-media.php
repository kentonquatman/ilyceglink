<?php get_header(); ?>

<section class="main no-hero" role="main">
  <div class="inner">
    <div class="main__content blog-feed">
      <?php
        $args = array(
          'post_type' => 'media',
          'orderby' => 'date',
          'order' => 'DESC'
        );
        $the_query = new WP_Query ( $args);
        if (have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();
  				  get_template_part( 'content', 'post' );
    			endwhile;
          echo '<footer class="pagination-wrapper">';
    			next_posts_link( 'Next' );
          previous_posts_link( 'Previous' );
    			the_posts_pagination( array(
      			'mid_size' => '2',
    				'prev_next' => false,
    				'type' => 'list'
    			) );
    			echo '</footer>';
    		else :
  			  get_template_part( 'content', 'none' );
        endif;
  		?>
    </div>
    <?php get_template_part( 'sidebar-media' ); ?>
  </div>
</section>

<?php get_footer(); ?>

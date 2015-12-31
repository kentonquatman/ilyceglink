<?php get_header(); ?>

<section class="main no-hero" role="main">
  <div class="inner">
    <div class="main__content blog-feed">
  		<?php
    		if ( have_posts() ) :
  			  while ( have_posts() ) : the_post();
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
    <?php get_template_part( 'sidebar-blog' ); ?>
  </div>
</section>

<?php get_footer(); ?>

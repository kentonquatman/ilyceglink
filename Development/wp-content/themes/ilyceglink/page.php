<?php
  get_header();
  while ( have_posts() ) : the_post();
?>

<?php if(has_post_thumbnail()) : ?>
<section class="hero">
  <figure class="post-image">
    <?php the_post_thumbnail('hero-image'); ?>
  </figure>
</section>
<section class="main" role="main">
<?php else : ?>
<section class="main no-hero" role="main">
<?php endif; ?>
  <div class="inner">
    <div class="main__content">
      <article>
        <header>
          <h1><?php the_title(); ?></h1>
        </header>
    		<?php the_content(); ?>
    		<?php
      		$press_kit_url = get_field('press_kit');
          if( $press_kit_url ) {
        ?>
        <a href="<?php echo $press_kit_url; ?>" class="button press-kit">Download Press Kit</a>
        <?php } ?>
      </article>
    </div>    
    <?php
      endwhile;
      get_template_part( 'sidebar' );
    ?>
  </div>  
</section>

<?php get_footer(); ?>

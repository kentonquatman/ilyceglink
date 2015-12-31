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
    <div class="main__content blog-post">
      <article>
        <header>
          <h1><?php the_title(); ?></h1>
          <p class="post-top__date">
            <time datetime="<?php the_time('Y-m-d G:i'); ?>"><?php the_time('F j, Y'); ?></time>
            <span class="spacer">|</span>
            <?php the_category(', '); ?>
          </p>
          <?php get_template_part('shared/social-share'); ?>
          <p class="post-top__comments">
            <a href="#comments"><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></a>
          </p>
        </header>
        <div class="post-body">
          <?php the_content(); ?>
        </div>
        <footer>
          <a class="back" href="<?php echo esc_url(home_url('/blog/')); ?>">Back to Blog</a>
        </footer>
      </article>
  		<?php
  			if ( comments_open() || get_comments_number() ) :
  				comments_template();
  			endif;
  			?>
    </div>
    <?php get_template_part( 'sidebar-blog' ); ?>
  </div>
</section>

<?php
  endwhile;
  get_footer();
?>
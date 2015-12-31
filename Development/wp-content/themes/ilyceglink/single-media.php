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
            <?php echo get_the_term_list( $post->ID, 'media-type', '', ', ', '' ); ?>
          </p>
          <?php get_template_part('shared/social-share'); ?>
        </header>
        <div class="post-body">
          <?php
            $video_player = get_field('media_video_embed');
            if($video_player){
              echo '<div class="media-video">' , $video_player, '</div>';
            }
          ?>
          <?php the_content(); ?>
        </div>
        <footer>
          <a class="back" href="<?php echo esc_url(home_url('/media/')); ?>">Back to Media</a>
        </footer>
      </article>
    </div>
    <?php get_template_part( 'sidebar-media' ); ?>
  </div>
</section>

<?php
  endwhile;
  get_footer();
?>
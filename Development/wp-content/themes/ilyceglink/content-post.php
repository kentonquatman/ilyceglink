<article>
  <?php if(has_post_thumbnail()) : ?>
  <figure>
    <?php the_post_thumbnail('feed-hero'); ?>
  </figure>
  <?php endif; ?>
  <div class="post-summary">
    <header>
      <h2>
        <?php the_title(sprintf('<a href="%s">',esc_url(get_permalink())),'</a>'); ?>
      </h2>
      <p class="post-details"><time datetime="<?php the_time('Y-m-d G:i'); ?>"><?php the_time('F j, Y'); ?></time></p>
    </header>
    <?php the_excerpt(); ?>
  </div>
  <footer><a href="<?php the_permalink(); ?>">Read More</a></footer>
</article>
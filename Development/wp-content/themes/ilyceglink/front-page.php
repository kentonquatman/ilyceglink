<?php get_header(); ?>

<section class="home-features">
  <ul class="slides">
    <?php
      if(has_post_thumbnail()) : 
      $url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'home-slide');
    ?>
    <li style="background-image:url(<?php echo $url['0']; ?>)">
    <?php else : echo '<li>'; endif; ?>
      <aside>
        <div class="aside-text">
          <h2>About Ilyce</h2>
          <?php the_content(); ?>
        </div>
        <div class="aside-form">
          <h4>Get the Newsletter</h4>         
          <div class="ctct-embed-signup">
            <div>
              <span id="success_message" style="display:none;">
                <div style="text-align:center;">Thanks for signing up!</div>
              </span>
              <form data-id="embedded_signup:form" class="ctct-custom-form Form mailing-list" name="embedded_signup" method="POST" action="https://visitor2.constantcontact.com/api/signup">
                <input data-id="ca:input" type="hidden" name="ca" value="10fd30f9-dc18-46b8-a4fb-474d477bbf79">
                <input data-id="list:input" type="hidden" name="list" value="13">
                <input data-id="source:input" type="hidden" name="source" value="EFD">
                <input data-id="required:input" type="hidden" name="required" value="email">
                <input data-id="url:input" type="hidden" name="url" value="">
                <input data-id="Email Address:input" type="text" name="email" placeholder="Email Address" value="" />
                <fieldset class="name-fields">
                  <input class="first-name" data-id="First Name:input" type="text" name="first_name" placeholder="First Name" value="" />
                  <input class="last-name" data-id="Last Name:input" type="text" name="last_name" placeholder="Last Name" value="" />
                </fieldset>
                <input type="submit" class="Button ctct-button Button--block Button-secondary" data-enabled="enabled" value="Sign-up" />
              </form>
            </div>
          </div>
          <script type='text/javascript'>
            var localizedErrMap = {};
            localizedErrMap['required'] = 'This field is required.';
            localizedErrMap['ca'] = 'An unexpected error occurred while attempting to send email.';
            localizedErrMap['email'] = 'Please enter your email address in name@email.com format.';
            localizedErrMap['birthday'] = 'Please enter birthday in MM/DD format.';
            localizedErrMap['anniversary'] = 'Please enter anniversary in MM/DD/YYYY format.';
            localizedErrMap['custom_date'] = 'Please enter this date in MM/DD/YYYY format.';
            localizedErrMap['list'] = 'Please select at least one email list.';
            localizedErrMap['generic'] = 'This field is invalid.';
            localizedErrMap['shared'] = 'Sorry, we could not complete your sign-up. Please contact us to resolve this.';
            localizedErrMap['state_mismatch'] = 'Mismatched State/Province and Country.';
            localizedErrMap['state_province'] = 'Select a state/province';
            localizedErrMap['selectcountry'] = 'Select a country';
            var postURL = 'https://visitor2.constantcontact.com/api/signup';
          </script>
          <script type='text/javascript' src='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.0/js/signup-form.js'></script>
        </div>
      </aside>
    </li>
    <?php 
      $posts = get_field('blog_slides');
      if( $posts ) :
      foreach( $posts as $post) :
      setup_postdata($post);
    ?>
    <?php
      if(has_post_thumbnail()) : 
      $url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'home-slide');
    ?>
    <li style="background-image:url(<?php echo $url['0']; ?>)">
    <?php else : echo '<li>'; endif; ?>
      <aside>
        <div class="aside-text">
          <h2><?php the_title(); ?></h2>
          <?php the_excerpt(); ?>
        </div>
        <footer>
          <a href="<?php the_permalink(); ?>" class="button">Read More</a>
        </footer>
      </aside>
		</li>
    <?php
      endforeach;
      wp_reset_postdata();
      endif;
    ?>
  </ul>
</section>

<section class="as-seen-on">
  <div class="inner">
    <ul>
      <li><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brands/cbs-logo-01.png" alt="Logo" width="70" height="45" /></li>
      <li><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brands/discover-logo-01.png" alt="Logo" width="95" height="60" /></li>
      <li><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brands/equifax-logo-01.png" alt="Logo" width="130" height="35" /></li>
      <li><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brands/washington-post-logo-01.png" alt="Logo" width="150" height="30" /></li>
      <li><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brands/yahoo-logo-01.png" alt="Logo" width="120" height="35" /></li>
      <li><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brands/zillow-logo-01.png" alt="Logo" width="125" height="30" /></li>
    </ul>
  </div>
</section>

<section class="home-middle">
  <div class="inner">
    <div class="home-middle__blog">
      <h5 class="heading">Recently on the Blog</h5>
      <?php
        query_posts( array(
          'post_type' => 'post',
          'showposts' => 2
        ) );
        while (have_posts()) : the_post();
  				get_template_part( 'content', 'post' );
    		endwhile;
  		?>
      <a class="button" href="<?php echo esc_url(home_url('/blog/')); ?>">See All Blog Posts</a>
    </div>
    <div class="home-middle__media">
      <h5 class="heading">Recently in the Media</h5>
      <?php
        query_posts( array(
          'post_type' => 'media',
          'showposts' => 2
        ) );
        while ( have_posts() ) : the_post();
  				get_template_part( 'content', 'post' );
    		endwhile;
  		?>
      <a class="button" href="<?php echo esc_url(home_url('/media/')); ?>">See All Media Posts</a>
    </div>
  </div>
</section>

<section class="home-bottom">
  <div class="inner">
    <article>
      <h3>Work with Ilyce</h3>
      <ul class="work-categories">
        <?php
          $page_ids = array('30','33','36');          
          $args = array(
            'post_type' => 'page',
            'post__in' => $page_ids
          );
          query_posts($args);
          while (have_posts()) : the_post();
        ?>
        <li>
          <h4><?php the_title(); ?></h4>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="button">Details</a>
        </li>
        <?php
          endwhile;
          wp_reset_query();
        ?>
      </ul>
    </article>
    <?php 
      $posts = get_field('featured_product');
      if( $posts ) :
      foreach( $posts as $post) :
      setup_postdata($post);
    ?>
      <aside>
        <div class="shop-item">
        <?php if(has_post_thumbnail()) : ?>
          <figure>
            <?php the_post_thumbnail('book-cover'); ?>
          </figure>
          <?php endif; ?>
          <div class="product-details">
            <h4><?php the_title(); ?></h4>
            <?php the_excerpt(); ?>
          </div>
          <a class="button" href="<?php the_field('book_purchase_url'); ?>" target="_blank">Order</a>
        </div>
      </aside>
    <?php
      endforeach;
      wp_reset_postdata();
      endif;
    ?>
  </div>
</section>

<?php get_footer(); ?>

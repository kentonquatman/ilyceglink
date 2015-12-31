<?php get_header(); ?>

<section class="main no-hero" role="main">
  <div class="inner">
    <div class="main__content books-feed">
      <?php
        $args = array(
          'post_type' => 'books',
          'orderby' => 'title',
          'order' => 'ASC'
        );
        $the_query = new WP_Query ( $args);
        if (have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
      ?>
      <article>
      <?php if(has_post_thumbnail()) : ?>
        <figure class="book-cover">
          <?php the_post_thumbnail('book-cover'); ?>
        </figure>
        <?php endif; ?>
        <div class="book-summary">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div>
        <a href="<?php the_field('book_purchase_url'); ?>" target="_blank" class="button">Order</a>
      </article>
      <?php
        endwhile;
        endif;
      ?>
    </div>
    <?php
      get_template_part( 'sidebar' );
    ?>
  </div>  
</section>

<?php get_footer(); ?>
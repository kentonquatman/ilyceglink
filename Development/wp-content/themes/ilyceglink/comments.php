<div id="comments" class="comments">
  <h2>Comments <a class="comments__jump-link" href="#comment-form">Leave a Comment</a></h2>
	<?php if ( have_comments() ) : ?>
		<ol class="comments__list">
			<?php
				wp_list_comments( array(
  				'max_depth'   => '1',
					'style'       => 'ol',
					'callback'    => 'my_custom_comments'
				) );
			?>
		</ol>
  <?php
    endif;
    comment_form( array(
      'id_form' => 'comment-form',
      'title_reply' => __( 'Leave a Comment' ),
      'cancel_reply_link' => __( 'Cancel Comment' ),
    ) );
  ?>
</div>
<footer class="site-footer">
  <div class="inner">
    <aside id="mailing-list" class="mailinglist-module">
      <h5>Get the Newsletter</h5>
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
    </aside>
    <div class="site-footer__links">
      <h2>
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h2>
      <nav class="footer-navigation">
        <?php
          wp_nav_menu(array(
            'menu' => 'Footer Navigation',
            'container' => false,
            'menu_class' => 'sitefooter__nav',
            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            'depth' => 2
          ));
          wp_nav_menu(array(
            'menu' => 'Network Navigation',
            'container' => false,
            'menu_class' => 'sitefooter__nav',
            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            'depth' => 2
          ));
        ?>
      </nav>
      <?php get_template_part( 'shared/social-links' ); ?>
    </div>
    <small class="copyright">&copy; <?php echo date('Y'); ?> Ilyce GLink</small>
  </div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri() . '/assets/js/jquery.js'; ?>"><\/script>')</script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/scripts.foot.min.js'; ?>"></script>
<!--[if (lt IE 9) & (!IEMobile)]>
  <script src="<?php echo get_template_directory_uri() . '/assets/js/scripts.ie8.min.js'; ?>"></script>
<![endif]-->
<!--[if (lt IE 8) & (!IEMobile)]>
  <script src="<?php echo get_template_directory_uri() . '/assets/js/imgsizer.js'; ?>"></script>
  <script>
    addLoadEvent(function() {
      if (document.getElementById && document.getElementsByTagName) {
        var aImgs = document.getElementById('content').getElementsByTagName('img');
        imgSizer.collate(aImgs);
      }
    });
  </script>
<![endif]-->

<?php wp_footer(); ?>

</body>
</html>

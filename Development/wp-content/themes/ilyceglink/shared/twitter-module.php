<?php
  $instance = array(
    'title' => 'Follow @glink on Twitter',
    'consumerkey' => 'rnJTpSWPnxx3ck18jEFTV1PKn',
    'consumersecret' => '3Q8lQ719LJbJXuemX6ei2sIakMtboLyhWIpXPA2uL1vqRtBKle',
    'accesstoken' => '14468282-uQMmU2z7mPho8nhS0UN7Oe5x93I6gDfHYMbVhjOct',
    'accesstokensecret' => 'mA10Gl2ice9N7oF5ddSexedRnhElCnjnVGXnBp91c3QGx',
    'cachetime' => '2',
    'username' => 'glink',
    'tweetstoshow' => 1,
    'excludereplies' => true
  );
  $args = array(
		'before_widget' => '<aside class="twitter-box">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3><a href="https://twitter.com/glink" target="_blank">',
		'after_title'   => '</a></h3>',
  );
  the_widget('tp_widget_recent_tweets', $instance, $args);
?>
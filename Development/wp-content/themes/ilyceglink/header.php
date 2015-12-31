<!DOCTYPE html>

<!--[if IEMobile 7 ]><html class="no-js iem7"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie ie6 ltie7 ltie8 ltie9 ltie10" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie ie7 ltie8 ltie9 ltie10" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8 ltie9 ltie10" lang="en"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie ie9 ltie10"> <![endif]-->
<!--[if (gt IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="imagetoolbar" content="false">
  <meta http-equiv="cleartype" content="on">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
	<?php wp_head(); ?>
  
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_bloginfo('template_directory'); ?>/assets/fav/apple-touch-icon-152x152-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_bloginfo('template_directory'); ?>/assets/fav/apple-touch-icon-144x144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_bloginfo('template_directory'); ?>/assets/fav/apple-touch-icon-120x120-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_bloginfo('template_directory'); ?>/assets/fav/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_bloginfo('template_directory'); ?>/assets/fav/apple-touch-icon-76x76-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_bloginfo('template_directory'); ?>/assets/fav/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_bloginfo('template_directory'); ?>/assets/fav/apple-touch-icon-60x60-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_bloginfo('template_directory'); ?>/assets/fav/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_bloginfo('template_directory'); ?>/assets/fav/apple-touch-icon-precomposed.png">
  <link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/assets/fav/favicon.ico">
  
</head>

<body <?php body_class(); ?>>

<?php get_template_part( 'shared/svg' ); ?>

<header class="site-header">
  <div class="inner">
    <nav class="site-navigation" role="navigation">
      <div class="search-bar">
        <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
          <input type="text" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        </form>
        <span class="search-toggle">
          <svg viewBox="0 0 30 30" class="icon search-icon">
            <use xlink:href="#search-icon"></use>
          </svg>
          <svg viewBox="0 0 30 30" class="icon close-icon">
            <use xlink:href="#close-icon"></use>
          </svg>
        </span>
      </div>
      <?php
        wp_nav_menu(array(
          'menu' => 'Header Navigation',
          'container' => false,
          'menu_class' => 'primary-nav',
          'items_wrap' => '<ul class="%2$s">%3$s</ul>',
          'depth' => 2
        ));
      ?>
    </nav>
    <a class="nav-toggle" href="#">
      <span class="line topbar"></span>
      <span class="line middlebar">Navigation</span>
      <span class="line bottombar"></span>
    </a>
    <h1>
      <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
    </h1>
  </div>
</header>
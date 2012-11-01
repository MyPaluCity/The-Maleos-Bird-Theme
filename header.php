<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<title><?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' ); if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; if ( $paged >= 2 || $page >= 2 )	echo ' | ' . sprintf( __( 'Page %s', 'TheMaleo' ), max( $paged, $page ) ); ?></title>
<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
<meta name="description" content="<?php bloginfo('description') ?>" />
<?php if(is_search()) { ?>
<meta name="robots" content="index, follow" />
<?php }?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/icon.png"/>
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/icon.png"/>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/icon.png"/>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- header START -->
<div   class="container_12">

<header class="header">
  <hgroup>
<h1><a href="<?php echo home_url(''); ?>/">
      <?php bloginfo('name'); ?>
      </a></h1>
  <h2>
      <?php bloginfo('description'); ?>
    </h2>
	</hgroup>
  </header>
<nav  id="access">
<nav  class="topmenu">
<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?><div class="clock" ><?php echo date('F j, Y',current_time('timestamp',1)); ?></div>

</nav>
</nav>

<div   id="wrapper">

<!-- header END -->
<div style="clear: both"></div>
<br>
<nav id="breadcrumbs"> <?php if (function_exists('the_breadcrumbs')) the_breadcrumbs(); ?>
</nav>
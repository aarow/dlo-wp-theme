<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php

   global $page, $paged;

   wp_title( '|', true, 'right' );

   bloginfo( 'name' );

   $site_description = get_bloginfo( 'description', 'display' );
   if ( $site_description && ( is_home() || is_front_page() ) )
       echo " - $site_description";

   if ( $paged >= 2 || $page >= 2 )
       echo ' | ' . sprintf( __( 'Page %s', 'starkers' ), max( $paged, $page ) );
	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<!--<link href='http://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Wire One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
-->

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



<!--[if lt IE 9]>
<script type="text/javascript" charset="utf-8" src="<?php echo get_bloginfo('template_directory')?>/js/modernizr.js"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

</head>

<body <?php body_class(); ?>>


<?php 
/*
	if filename is (main page) then hide all elements using
	javascript and then reveal by fade in
*/
	if( is_page("Home") ) {
?>

<script type="text/javascript">
	var browserHeight = $(window).height();
	$('body').height(browserHeight + 100);
	$('body').addClass('js');
</script>
<?php
	}
?>
<header id="top">
	<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
		<img id="mainLogoPic" src="<?php echo get_bloginfo('template_directory');?>/images/logo_rocketcircle.png">
		<img id="mainLogoName" src="<?php echo get_bloginfo('template_directory');?>/images/logo_name.png">
		<h1 id="mainLogo">
			<?php bloginfo( 'name' ); ?>
		</h1>
	</a>
	<p><?php bloginfo( 'description' ); ?></p>
	<?php 
		wp_nav_menu( array( 'container' => 'nav', 'fallback_cb' => 'starkers_menu', 'theme_location' => 'primary' ) );
	?>
</header>
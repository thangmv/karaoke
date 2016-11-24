<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package karaoke
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'karaoke' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row">
				<div class=" col-xs-8 col-sm-5 logo">
					<a href="http://x3dev.crystal-techs.com/">
						<img src="http://x3dev.crystal-techs.com/wp-content/uploads/2016/11/logo-2.png"/>
					</a>
				</div>
				<nav id="site-navigation" class=" col-sm-7 col-xs-8 main-navigation" role="navigation">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

				</nav><!-- #site-navigation -->


			</div>
		</div>
	</header><!-- #masthead -->

</div>


<div id="content" class="site-content">

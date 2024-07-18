<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nomad-sun
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css?family=Archivo+Black|Cardo:400,400i|Tenor+Sans|Archivo" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="barba-wrapper">
		<div id="page" class="barba-container relative">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'nomadsun'); ?></a>

			<header id="masthead" class="site-header absolute top-0 left-0 w-full px-6 sm:px-16 pt-10">
				<nav id="site-navigation" class="main-navigation flex justify-between items-center">
					<a class="invisible menu-toggle text-sm font-archivo text-white uppercase tracking-widest sm:visible sm:block w-32">
						Places
					</a>

					<a href="<?php echo get_site_url(); ?>">
						<img src="<?php bloginfo('template_directory'); ?>/images/sun-logo.svg">
					</a>

					<div class="flex items-center justify-end w-32">
						<a href="https://facebook.com/nomadsun" class="mx-2">
							<img src="<?php bloginfo('template_directory') ?>/images/facebook.svg">
						</a>
						<a href="https://twitter.com/nomadsun" class="mx-2">
							<img src="<?php bloginfo('template_directory'); ?>/images/twitter.svg">
						</a>
						<a href="https://instagram.com/nomadsun" class="mx-2">
							<img src="<?php bloginfo('template_directory'); ?>/images/insta.svg">
						</a>
					</div>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">

<?php header("Content-Type: application/xhtml+xml; charset=utf-8") ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head>

		<!-- "XH5": The XHTML-5 WordPress Template Theme -->
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf8"/>
		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>"/>

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen"/>
		<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>"/>
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>"/>
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>"/>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

		<?php wp_enqueue_script('jquery'); ?>
		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<header>
			<h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<h2><?php bloginfo('description'); ?></h2>
		</header>
		<nav>
			<ul>
				<?php wp_list_pages('title_li='); ?>
			</ul>
		</nav>

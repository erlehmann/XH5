<?php header("Content-Type: text/html; charset=utf-8") ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<meta charset=utf-8>
<meta name=description content="<?php bloginfo('description'); ?>">

<link rel=stylesheet href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
<link rel=alternate type=text/xml title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
<link rel=alternate type=application/atom+xml title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
<link rel=alternate type=application/rss+xml title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
<link rel=pingback href="<?php bloginfo('pingback_url'); ?>">

<?php wp_head(); ?>

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

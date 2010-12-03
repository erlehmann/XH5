<?php header("Content-Type: text/html; charset=utf-8") ?>
<!DOCTYPE html>

<meta charset=utf-8><meta name=description content="<?php bloginfo('description'); ?>">
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

<link rel=stylesheet href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
<link rel=alternate type=application/atom+xml title="Artikelfeed" href="<?php bloginfo('atom_url'); ?>">
<link rel=alternate type=application/atom+xml title="Kommentarfeed" href="<?php bloginfo('comments_atom_url'); ?>">
<link rel=pingback href="<?php bloginfo('pingback_url'); ?>">

<?php wp_head(); ?>

<header><hgroup>
    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
    <h2><?php bloginfo('description'); ?></h2>
</hgroup></header>

<nav>
    <h1>Navigation</h1>
    <ul><?php wp_list_pages('title_li='); ?></ul>
</nav>

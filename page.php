<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?><?php include 'article.php'; ?><?php endwhile; ?>
<nav><h1>Artikel</h1><?php posts_nav_link(' '); ?></nav>
<?php get_footer(); ?>

<?php get_header(); ?>

<?php $post = $posts[0]; // hack: set $post so that the_date() works ?>

<?php if (is_category()) { ?>
<h1>Archiv für Kategorie „<?php single_cat_title(); ?>“</h1>

<?php } elseif(is_tag()) { ?>
<h1>Archiv für Tag „<?php single_tag_title(); ?>“</h1>

<?php } elseif (is_day()) { ?>
<h1>Archiv für <?php the_time('j. F Y'); ?></h1>

<?php } elseif (is_month()) { ?>
<h1>Archiv für <?php the_time('F Y'); ?></h1>

<?php } elseif (is_year()) { ?>
<h1>Archiv für <?php the_time('Y'); ?></h1>

<?php } elseif (is_author()) { ?>
<h1>Autor-Archiv</h1>

<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    <h1>Blog-Archiv</h1>

<?php } ?>

<?php while (have_posts()) : the_post(); ?><?php include 'article.php'; ?><?php endwhile; ?>

<?php get_footer(); ?>

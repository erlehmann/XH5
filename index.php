<?php get_header(); ?>
<section>
<h1>Neueste Artikel</h1>
<?php while (have_posts()) : the_post(); ?><?php include 'article.php'; ?><?php endwhile; ?>
</section>
<?php get_footer(); ?>

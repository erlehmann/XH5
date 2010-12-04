<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>">
    <?php include 'article-content.php'; ?>
    <?php comments_template(); ?>
</article>

<nav>
    <p>
        <?php previous_post_link(); ?><?php next_post_link(); ?>
    </p>
</nav>

    <?php endwhile; else: ?>

<article>
    <p>
        Kein Artikel entsprach den gewünschten Kriterien.
    </p>
</article>

    <?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

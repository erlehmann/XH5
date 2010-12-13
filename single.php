<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<div class="section">
    <article id="post-<?php the_ID(); ?>">
        <?php include 'article-content.php'; ?>
        <nav>
            <h3>Weitere Artikel</h3>
            <?php previous_post_link(); ?>
            <?php next_post_link(); ?>
        </nav>
        <?php comments_template(); ?>
    </article>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>

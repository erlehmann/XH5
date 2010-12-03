<?php get_header(); ?>

<?php if (have_posts()) : ?>

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
<?php while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>">
    <header>
        <ul class="categories">
            <li><?php the_category('</li>
            <li>'); ?></li>
        </ul>
        <?php comments_popup_link('Kein Kommentar', 'Ein Kommentar', '% Kommentare'); ?>
        <h1>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink zu <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h1>
    </header>
    <section>
        <?php the_content('Kostenlose Vollversion …'); ?>
    </section>
    <footer>
        <span class="author"><?php the_author(); ?></span>
        <?php edit_post_link('Artikel bearbeiten', '', ''); ?>
        <time datetime="<?php the_time('c'); ?>"><?php the_time('j. F Y, G:i'); ?></time>
    </footer>
</article>

<?php endwhile; ?>

<nav>
    <p>
        <?php posts_nav_link(' '); ?>
    </p>
</nav>

<?php else : ?>

<article>
    <h1>Artikel nicht gefunden</h1>
    <p>
        Der angeforderte Artikel wurde nicht gefunden. Wahrscheinlich haben Sie sich vertrippt.
    </p>
    <?php get_search_form(); ?>
</article>

<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

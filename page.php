<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section>
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
                    <?php edit_post_link('Bearbeiten', '', ''); ?>
                    <time datetime="<?php the_time('c'); ?>"><?php the_time('j. F Y, G:i'); ?></time>
                    <?php wp_link_pages(array('before' => '<p><strong>Seiten:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
                </footer>
            </article>
        </section>

    <?php endwhile; else: ?>

        <section>
            <article>
                <p>
                    Kein Artikel entsprach den gewünschten Kriterien.
                </p>
            </article>
        </section>

    <?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

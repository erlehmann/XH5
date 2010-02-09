<?php get_header(); ?>

        <section>

            <?php if (have_posts()) : ?>
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
                    <?php edit_post_link('Bearbeiten', '', ''); ?>
                    <time datetime="<?php the_time('c'); ?>"><?php the_time('j. F Y, G:i'); ?></time>
                </footer>
            </article>

            <?php endwhile; ?>

            <nav>
                <p>
                    <?php posts_nav_link('&nbsp;&bull;&nbsp;'); ?>
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

        </section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

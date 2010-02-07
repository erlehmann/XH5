<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section>
            <article id="post-<?php the_ID(); ?>">
                <header>
                    <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                    <p>Pfostiert <?php the_time('F jS, Y'); ?> von <?php the_author(); ?></p>
                </header>
                <section>
                    <?php the_content('Kostenlose Vollversion …'); ?>

                </section>
                <footer>
                    <?php wp_link_pages(array('before' => '<p><strong>Seiten:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
                    <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

                    <p>
                        Dieser Artikel wurde pfostiert am <?php the_time('l, F jS, Y'); ?> um <?php the_time(); ?> und ist kategorisiert <?php the_category(', ') ?>. 
                        Du kannst Kommentaren mit Hilfe des Feeds folgen: <?php post_comments_feed_link('RSS 2.0'); ?>

                        <?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
                            // both comments and pings open ?>
                            Das Hinterlassen von <a href="#respond">Kommentaren</a> und <a href="<?php trackback_url(); ?>" rel="trackback">Trackbacks</a> ist erlaubt und erwünscht.

                        <?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
                            // only pings are open ?>
                            Kommentare sind geschlossen, <a href="<?php trackback_url(); ?> " rel="trackback">Trackbacks</a> erlaubt.

                        <?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
                            // comments are open, pings are not ?>
                            Kommentare sind erlaubt, Trackbacks geschlossen.

                        <?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
                            // neither comments nor pings are open ?>
                            Kommentare und Trackbacks sind geschlossen.

                        <?php } edit_post_link('Diesen Artikel bearbeiten','','.'); ?>

                    </p>
                </footer>
            </article>

            <?php comments_template(); ?>

            <nav>
                <p><?php previous_post_link(); ?><?php next_post_link(); ?></p>
            </nav>
        </section>

    <?php endwhile; else: ?>

        <section>
            <article>
                <p>Kein Artikel entsprach den gewünschten Kriterien.</p>
            </article>
        </section>

    <?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

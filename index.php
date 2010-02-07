<?php get_header(); ?>

		<section>

			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>">
				<header>
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink zu <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<p>Pfostiert <?php the_time('F jS, Y'); ?> von <?php the_author(); ?></p>
				</header>
				<section>
					<?php the_content('Kostenlose Vollversion …'); ?>

				</section>
				<footer>
					<p><?php the_tags('Verschlagwortet: ', ', ', '<br/>'); ?> Pfostiert in <?php the_category(', '); ?><?php edit_post_link('Bearbeiten', '', ''); ?> <?php comments_popup_link('Kommentieren', 'Ein Kommentar', '% Kommentare'); ?></p>
				</footer>
			</article>

			<?php endwhile; ?>

			<nav>
				<p><?php posts_nav_link('&nbsp;&bull;&nbsp;'); ?></p>
			</nav>

			<?php else : ?>

			<article>
				<h1>Artikel nicht gefunden</h1>
				<p>Der angeforderte Artikel wurde nicht gefunden. Wahrscheinlich haben Sie sich vertrippt.</p>
				<?php get_search_form(); ?>
			</article>

			<?php endif; ?>

		</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

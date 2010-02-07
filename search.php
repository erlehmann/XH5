<?php get_header(); ?>

		<section>

			<?php if (have_posts()) : ?>

			<article id="post-<?php the_ID(); ?>">
				<h1>Suchergebnisse für „<?php the_search_query(); ?>“</h1>
				<ol>

					<?php while (have_posts()) : the_post(); ?>

					<li>
						<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink zu <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>
					</li>

					<?php endwhile; ?>

				</ol>
			</article>
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

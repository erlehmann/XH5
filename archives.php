<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section>
			<article id="post-<?php the_ID(); ?>">
				<header>
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink zu <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<p>Pfostiert <?php the_time('F jS, Y'); ?> by <?php the_author(); ?></p>
				</header>
				<section>
					<h2>Monats-Archiv</h2>
					<ul>
						<?php wp_get_archives('type=monthly'); ?>
					</ul>
					<h2>Kategorien-Archiv</h2>
					<ul>
						<?php wp_list_categories(); ?>
					</ul>
					<h2>Tages-Archiv</h2>
					<?php wp_tag_cloud('format=list&smallest=12px&largest=12px'); ?>

				</section>
				<footer>
					<?php wp_link_pages(array('before' => '<p><strong>Seiten:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</footer>
			</article>
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

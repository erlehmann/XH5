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
<?php the_content('Kostenlose Vollversion …'); ?>
<footer>
    <span class="author"><?php the_author(); ?></span>
    <?php edit_post_link('Artikel bearbeiten', '', ''); ?>
    <time datetime="<?php the_time('c'); ?>"><?php the_time('j. F Y, G:i'); ?></time>
    <?php wp_link_pages(array('before' => '<p><strong>Seiten:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</footer>

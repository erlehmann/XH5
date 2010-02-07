        <aside>
            <ul>
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

                <li>
                    <h2>XH5 Theme</h2>
                    <p>
                        XH5 ist ein Wordpress-Theme entwickelt mit XHTML5. XH5 schaut prima aus (außer im Internet-Explorer, aber wenn du den benutzt, kannst du diesen Text sowieso nicht lesen) und ist hoffentlich irgendwann einmal valides XHTML5 und CSS.
                    </p>
                </li>
                <li>
                    <h2>Seite durchsuchen</h2>
                    <?php get_search_form(); ?>

                </li>

                <?php wp_list_categories('show_count=1&title_li=<h2>Kategorien</h2>'); ?>

                <li>
                    <h2>Archiv</h2>
                    <ul>
                        <?php wp_get_archives('type=monthly'); ?>
                    </ul>
                </li>

                <?php if ( is_404() || is_category() || is_day() || is_month() || is_year() || is_search() || is_paged() ) { ?>

                <li>
                    <?php if (is_404()) { ?>
                    <p>
                        Gib andere Begriffe in das Suchformular ein, vielleicht hast du dann mehr Erfolg.
                    </p>

                    <?php } elseif (is_category()) { ?>
                    <p>
                        Du schaust dir zur Zeit das Archiv für die Kategorie „<?php single_cat_title(''); ?>“ an.
                    </p>

                    <?php } elseif (is_day()) { ?>
                    <p>
                        Du schaust dir zur Zeit das Archiv für den Tag <?php the_time('l, F jS, Y'); ?> an.
                    </p>

                    <?php } elseif (is_month()) { ?>
                    <p>
                        Du schaust dir zur Zeit das Archiv für den Monat <?php the_time('F, Y'); ?> an.
                    </p>

                    <?php } elseif (is_year()) { ?>
                    <p>
                        Du schaust dir zur Zeit das Archiv für das Jahr <?php the_time('Y'); ?> an.
                    </p>

                    <?php } elseif (is_search()) { ?>
                    <p>
                        Du suchtest nach „<strong>'<?php the_search_query(); ?>'</strong>“.
                    </p>

                    <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                    <p>
                        Du schaust dir zur Zeit das Archiv von <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> an.
                    </p>

                    <?php } ?>
                </li>
                <?php }?>
                <?php wp_list_pages('title_li=<h2>Seiten</h2>' ); ?>

                <?php if (is_home() || is_page() || is_single()) { ?>
                <?php wp_list_bookmarks(); ?>

                <li>
                    <h2>Meta</h2>
                    <ul>
                        <?php wp_register(); ?>
                        <li><?php wp_loginout(); ?></li>
                        <li><a href="http://validator.w3.org/check/referer" title="Built with valid HTML 5" rel="nofollow">Valid <abbr title="HyperText Markup Language">XHTML</abbr>5</a></li>
                        <li><a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fdiggingintowordpress.com%2FThemePlayground%2Fwp-content%2Fthemes%2FH5%2Fstyle.css&profile=css21&usermedium=all&warning=1&lang=en" title="Styled with valid CSS" rel="nofollow">Valid CSS 2.1</a></li>
                        <li><a href="http://wordpress.org/" title="Proudly Powered by WordPress" rel="nofollow">WordPress</a></li>
                        <?php wp_meta(); ?>
                    </ul>
                </li>
                <?php } ?>

                <li>
                    <h2>XH5 Resources</h2>
                    <ul>
                        <li><a href="http://perishablepress.com/" title="Perishable Press">Perishable Press</a></li>
                        <li><a href="http://diggingintowordpress.com/" title="Digging into WordPress">Digging into WordPress</a></li>
                        <li><a href="http://css-tricks.com/" title="CSS Tricks">CSS Tricks</a></li>
                    </ul>
                </li>
            <?php endif; ?>
            </ul>
        </aside>

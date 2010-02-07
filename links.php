<?php
/*
Template Name: Links
*/
?>
<?php get_header(); ?>

        <section>
            <article>
                <h1>Lieblingslinks</h1>
                <ul>
                    <?php wp_list_bookmarks(); ?>
                </ul>
            </article>
        </section>

<?php get_footer(); ?>

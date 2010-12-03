<?php
/*
Template Name: Links
*/
?>
<?php get_header(); ?>

<article>
    <h1>Lieblingslinks</h1>
    <ul>
        <?php wp_list_bookmarks(); ?>
    </ul>
</article>

<?php get_footer(); ?>

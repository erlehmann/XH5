<footer>
    <p>
        © <?= date('Y'); ?> <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
        XH5 Theme für <a href="http://wordpress.org/">WordPress <?php bloginfo('version'); ?></a>
        <a href="<?php bloginfo('atom_url'); ?>" title="Blogartikel als Feed abonnieren">Artikelfeed (ATOM)</a>
        <a href="<?php bloginfo('comments_atom_url'); ?>" title="Kommentare als Feed abonnieren">Kommentarfeed (ATOM)</a>
    </p>
</footer>
<?php wp_footer(); ?>

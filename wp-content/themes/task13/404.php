<?php get_header(); ?>

<div class="l-container">
    <div class="p-notfound">
        <img src="<?= get_stylesheet_directory_uri(); ?>/img/404.png" alt="404 not found">
        <a href="<?php bloginfo('url') ?>" class="c-text">Back to homepage</a>
    </div>
</div>

<?php get_footer(); ?>
<div class="l-sidebar">
    <div class="c-widget">
        <h3 class="c-widget__title">Search</h3>
        <div class="c-search">
            <?php get_search_form(); ?>
        </div>
    </div>
    <div class="c-widget">
        <h3 class="c-widget__title">Category</h3>
        <ul class="c-list">
            <?php 
                $args = array(
                    'type'      => 'post',
                    'number'    => 10,
                    'parent'    => 0
                );
                $cats = get_categories($args);
                foreach ( $cats as $cat ) { 
            ?>
                <li>
                    <a href="<?= get_category_link($cat->cat_ID) ?>" ><?= $cat->name ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="c-widget">
        <h3 class="c-widget__title">Archive</h3>
        <ul class="c-list">
            <?php 
                $args = array(
                    'type' => 'yearly',
                    'after' => '年', 
                    'post_type' => 'post',
                );
                wp_get_archives($args); 
            ?> 
        </ul>
    </div>
</div>
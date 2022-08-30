<?php
/* Custom Post Type Start */
function create_posttype() {
    register_post_type( 'topics',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'topics' ),
                'singular_name' => __( 'topics' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'topics'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

function cw_post_type_topics() {
    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
    );
    $labels = array(
        'name' => _x('topics', 'plural'),
        'singular_name' => _x('post', 'singular'),
        'menu_name' => _x('topics', 'admin menu'),
        'name_admin_bar' => _x('topics', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New topics'),
        'new_item' => __('New topics'),
        'edit_item' => __('Edit topics'),
        'view_item' => __('View topics'),
        'all_items' => __('All topics'),
        'search_items' => __('Search topics'),
        'not_found' => __('No topics found.'),
    );
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'topics'),
        'has_archive' => true,
        'hierarchical' => false,
        'taxonomies' => array( 'category' ),
    );
    register_post_type('topics', $args);
}
add_action('init', 'cw_post_type_topics');
/*Custom Post type end*/

// add_filter('pre_get_posts','get_custom_post_type');
// function get_custom_post_type($query) {
//   if (is_home() && $query->is_main_query ())
//     $query->set ('post_type', array ('post','topics'));
//     return $query;
// }

/* Create Menu */
function register_my_menu() {
    register_nav_menu('gnav',__( 'g-nav' ));
}
add_action( 'init', 'register_my_menu' );
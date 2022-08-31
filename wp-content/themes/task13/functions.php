<?php
/* Custom Post Type Start */
// function create_posttype() {
//     register_post_type(
//         'topics',
//         array(
//             'label' => 'topics',
//             'labels' => array(
//                 'all_items' => 'topics',
//                 'add_new' => 'add new',
//                 'add_new_item' => 'add new item',
//                 'edit_item' => 'edit',
//                 'new_item' => 'new item',
//                 'view_item' => 'view',
//                 'search_items' => 'search',
//                 'not_found' => 'not found',
//                 'not_found_in_trash' => 'not found in trash',
//             ),
//             'public' => true,
//             'has_archive' => true,
//             'supports' => [ 'title', 'thumbnail', 'editor' ],
//         ));
//     }
// add_action( 'init', 'create_posttype' );

/* Create Menu */
function register_my_menu() {
    register_nav_menu('gnav',__( 'g-nav' ));
}
add_action( 'init', 'register_my_menu' );


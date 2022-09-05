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

/* Pagination */
function pagination_tdc($wp_query, $paged, $type='') {

    if( $wp_query->max_num_pages <= 1 )
    return;
    $paged = $paged;
    $max = intval( $wp_query->max_num_pages );
   
    if ( $paged >= 1 )
    $links[] = $paged;
    if ( $paged >= 3 ) {
           $links[] = $paged - 1;
           $links[] = $paged - 2;
    }
   
    if ( ( $paged + 2 ) <= $max ) {
           $links[] = $paged + 2;
           $links[] = $paged + 1;
    }
    $html = '';
    $html .= '<ul class="pagination" >' . "\n";
   
   
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
        if(!$class) {
            $html .= '<li><a rel="nofollow" class="page larger" href="'.build_url( $type, 1).'" >1</a></li>';
        } else {
            $html .= '<li '.$class.'>1</li>';
        }
        if ( ! in_array( 2, $links ) )
            $html .= '<li>…</li>';
    }
   
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        if(!$class) {
            $html .= '<li><a rel="nofollow" class="page larger" href="'.build_url( $type, $link,).'">'.$link .'</a></li>' . "\n";
        } else {
            $html .= '<li '.$class.'>'. $link .'</li>';
        }
    }
   
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) ) $html .= '<li>…</li>' . "\n";
        $class = $paged == $max ? ' class="active"' : '';
        $html .= '<li '.$class.'><a rel="nofollow" class="page larger" href="'.build_url( $type, $max).'">'.$max.'</a></li>';
    }
    $html .= '</ul>' . "\n";
    return $html;
}

function build_url( $type, $paged){
    if(!empty($type))
        $url = home_url('/topic/page/'.$paged);
    else $url = home_url("/page"."/".$paged);
    return $url;
}
<?php
add_theme_support('post-thumbnails');

add_filter( 'previous_post_link', 'add_prev_post_link_class' );
function add_prev_post_link_class($output) {
  return str_replace('<a href=', '<a class="prev-link" href=', $output);
}
add_filter( 'next_post_link', 'add_next_post_link_class' );
function add_next_post_link_class($output) {
  return str_replace('<a href=', '<a class="next-link" href=', $output);
}

function my_archive_title($title) {
	if ( is_category() ) {
    	$title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_post_type_archive() && !is_date() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_date() ) {
       $date  = single_month_title('',false);
       $point = strpos($date,'月');
       $title = mb_substr($date,$point+1).'年'.mb_substr($date,0,$point+1);
     }
    $title = $title. 'の記事一覧';
    return $title;
};
add_filter( 'get_the_archive_title', 'my_archive_title');

function add_editor_style_cb() {
  add_editor_style();
}
add_action('admin_init', 'add_editor_style_cb');


// 固定ページ　newsのエディタの非表示
function disable_visual_editor_in_page(){
    global $typenow;
     $post_id = $_GET['post'];
    if( $typenow == 'page' ){
        if ( in_array( $post_id, array('913'), true )  ){
            $hide_postdiv_css = '<style type="text/css">#postdiv, #postdivrich { display: none; }</style>';
            echo $hide_postdiv_css;
        }
    }
}
add_action('load-post.php', 'disable_visual_editor_in_page');
add_action('load-post-new.php', 'disable_visual_editor_in_page');



/*
* 固定ページのみ自動的に付与されるpタグやbrタグを無効
*/
function disable_page_wpautop() {
  if ( is_page() ) remove_filter( 'the_content', 'wpautop' );
}
add_action( 'wp', 'disable_page_wpautop' );

//ショートコード
function my_home_url( $atts ) {
    return home_url();
}
add_shortcode( 'home_url', 'my_home_url' );

function my_theme_url( $atts ) {
    return get_template_directory_uri();
}
add_shortcode( 'theme_url', 'my_theme_url' );


function short_php($params = array()) {
  extract(shortcode_atts(array(
    'file' => 'default'
  ), $params));
  ob_start();
  include(STYLESHEETPATH . "/$file.php");
  return ob_get_clean();
}

add_shortcode('myphp1', 'short_php');

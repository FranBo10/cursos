<?php
/*
|-------------------------------------------------------------------------------
| Function to add default support
|-------------------------------------------------------------------------------
*/
function WoowSetup(){
	// This theme uses Woocommerce
	add_theme_support( 'woocommerce' );
    add_theme_support('learnpress');
	// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );
	// This theme uses Featured Images
	add_theme_support( 'post-thumbnails' );
	// This theme uses excerpt in pages
	add_post_type_support( 'page', 'excerpt' );
	// Register top menu
	register_nav_menu( 'Top', 'Top Menu' );
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();
}
add_action( 'after_setup_theme', 'WoowSetup' );

function PostTypeSection ($post_type) {
    $post_type_arr = array();
    $args = array(
            'post_type' => $post_type
        ,   'post_status' => 'publish'
        ,   'posts_per_page' => -1
    );

    $wp_query = new WP_Query( $args );
    while( $wp_query->have_posts() ) : $wp_query->the_post();
        $post_id = get_the_id();
        $imgAttr = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id  ), 'full' );
        $post_type_arr[ $post_id ]['urlImg'] = (!empty($imgAttr[ 0 ])) ? $imgAttr[ 0 ] : '';
        $post_type_arr[ $post_id ]['id'] = $post_id;
        $post_type_arr[ $post_id ]['name'] = get_the_title();
        $post_type_arr[ $post_id ]['descripcion'] = get_the_content();
		$post_type_arr[ $post_id ]['link'] = get_the_permalink();
        $post_type_arr[ $post_id ]['_lp_info_extra_fast_query'] = json_decode (get_post_meta($post_id, '_lp_info_extra_fast_query' , true));
		$post_type_arr[ $post_id ]['_lp_price'] = get_post_meta($post_id, '_lp_price' , true);
    endwhile;
    wp_reset_postdata();
    wp_reset_query();
    return $post_type_arr;
}


function FrontScripts (){
	// wp_register_script( 'ajax-woow', JSURL.'ajax-woow.js', array(), '1.0.3', true );
	// wp_localize_script( 'ajax-woow', 'MyAjax', array( 'url' => admin_url( 'admin-ajax.php' ), 'urlHome' => home_url(), 'urlJs' => JSURL ) );
	wp_enqueue_script('jquery');
	// wp_enqueue_script('ajax-woow');
}
add_action( 'wp_enqueue_scripts', 'FrontScripts' );




	
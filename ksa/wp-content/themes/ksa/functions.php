<?php

/*
*	Main theme functions and definitions
*/

/**
 * Set up the content width value based on the theme's design.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1080;
}
/**
 * image Path for the front end.
 */
if( !defined(THEME_IMG_PATH)){
   define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/images' );
}

/**
 * Enqueue scripts and styles for the front end.
 */
function eut_frontend_scripts() {
	$template_dir_uri = get_template_directory_uri();
	$child_theme_dir_uri = get_stylesheet_directory_uri();

	wp_enqueue_style( 'eut-theme-style', $child_theme_dir_uri.'/style.css', 'all' );
	wp_enqueue_style( 'eut-style', $template_dir_uri.'/css/styles.css', 'all' );
	wp_enqueue_style( 'eut-fonts', 'https://akcdn.magzter.com/web/srz/assets/css/fonts.css', 'all' );
	wp_enqueue_style( 'eut-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css', 'all' );
	wp_enqueue_style( 'eut-bootstrap', $template_dir_uri . '/css/bootstrap.css', array(), '4.6.3' );
	wp_enqueue_style( 'eut-slick', $template_dir_uri . '/css/slick.css');

	wp_enqueue_script( 'eut-bootstrap', $template_dir_uri . '/js/bootstrap.js', array( 'jquery' ), '2.8.3', false);
	wp_enqueue_script( 'eut-jquery', $template_dir_uri . '/js/jquery-3.2.1.min.js');
	wp_enqueue_script( 'eut-slick', $template_dir_uri . '/js/slick.js');
	wp_enqueue_script( 'eut-common', $template_dir_uri . '/js/common.js');
    /*wp_enqueue_script( 'eut-select2', $template_dir_uri . '/js/select2.full.js');
	wp_enqueue_script( 'eut-script', $template_dir_uri . '/js/script.js');*/
}
add_action( 'wp_enqueue_scripts', 'eut_frontend_scripts' );

add_theme_support( 'menus' );
// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
    'primary' => esc_html__( 'Primary', 'magazeen-lite' ),
));

class Magazeen_CSS_Menu_Walker extends Walker {

  var $db_fields = array( 'parent' =>'menu_item_parent', 'id' => 'db_id' );
  
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul>\n";
  }
  
  function end_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }
  
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
  
    global $wp_query;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $class_names = $value = ''; 
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    
    /* Add active class */
    if(in_array('current-menu-item', $classes)) {
      $classes[] = 'active';
      unset($classes['current-menu-item']);
    }
    
    /* Check for children */
    $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' =>'_menu_item_menu_item_parent', 'meta_value' => $item->ID));
    if (!empty($children)) {
      $classes[] = 'has-sub';
    }
    
    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
    
    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
    
    $output .= $indent . '<li' . $id . $value . $class_names .'>';
    
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    
    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'><span>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= '</span></a>';
    $item_output .= $args->after;
    
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
  
  function end_el( &$output, $item, $depth = 0, $args = array() ) {
    $output .= "</li>\n";
  }
}  

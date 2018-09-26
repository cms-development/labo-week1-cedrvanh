<?php 
/**
 * Proper way to enqueue scripts and styles
 */
function scratch_enqueue_scripts() {
    wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );    
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

function theme_sidebar() {
  $args = array(
    'name'          => 'Cedrvanh Sidebar',
    'id'            => 'cedrvanh-sidebar',
    'description'   => 'Sidebar for the cedrvanh theme',
    'class'         => '',
    'before_widget' => '<p id="%1$s" class="widget %2$s">',
    'after_widget'  => '</p>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' 
  );

  register_sidebar( $args );

}

add_action( 'wp_enqueue_scripts', 'scratch_enqueue_scripts' );
add_action( 'widgets_init', 'theme_sidebar' );

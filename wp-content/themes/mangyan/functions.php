<?php 

//Add scripts and stylesheet
function mangyan_scripts() {
	//add bootstrap css
	wp_enqueue_style( 'bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.5');
	
	//add style.css
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0');
	
	//add bootstrap javascript
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.5');
}
add_action( 'wp_enqueue_scripts', 'mangyan_scripts' );

//Register menu
register_nav_menus(array(
	'primary' => __('Primary Menu'),
	'footer'  => __('Footer Menu'),
));

//remove top bar
add_filter( 'show_admin_bar', '__return_false' );
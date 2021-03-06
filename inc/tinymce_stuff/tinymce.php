<?php
	



//adding tiny mce plugin buttons	
add_action( 'init', 'seasaltpress_buttons' );

function seasaltpress_buttons() {
    add_filter( "mce_external_plugins", "seasaltpress_add_buttons" );
    add_filter( 'mce_buttons', 'seasaltpress_register_buttons' );
    wp_enqueue_style('tinymce_button_styles', get_template_directory_uri() . '/inc/tinymce_stuff/custom-button-style.css');	
}

function seasaltpress_add_buttons( $plugin_array ) {

    $plugin_array['seasaltpress'] = get_template_directory_uri() . '/inc/tinymce_stuff/tinymce_buttons.js';
    
    return $plugin_array;
}

function seasaltpress_register_buttons( $buttons ) {
	
	$seasaltpress_buttons = array(
	'seasaltpress-options'
	
);


    $buttons = array_merge( $buttons, $seasaltpress_buttons); 
    return $buttons;
}



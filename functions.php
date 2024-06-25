<?php 

// Global
function enqueue_custom_styles() {
     // ---Styles
     wp_enqueue_style("style-css", get_template_directory_uri() . "/dist/style.css", array(), "1.0", "all");
     wp_enqueue_style("pdf-css", get_template_directory_uri() . "/dist/view-pdf.css", array(), "1.0", "all");
     // ---Javascript
     // Enqueue main script.js
     wp_enqueue_script("script-js", get_template_directory_uri() . "/app/js/script.js", array(), "1.0", true);
     // Enqueue review_script.js
     wp_enqueue_script("review-js", get_template_directory_uri() . "/app/js/review_script.js", array(), "1.0", true);
     wp_enqueue_script("pop-js", get_template_directory_uri() . "/app/js/pop.js", array(), "1.0", true);
     // Enqueue test.js
     wp_enqueue_script("test-js", get_template_directory_uri() . "/app/js/test.js", array(), "1.0", true);
     
     // Localize review-js script
     wp_register_script('review-js', get_template_directory_uri() . '/app/js/files.js', [], '1.0', true);
     wp_localize_script('review-js', 'reviewData', ['template_directory_path' => get_template_directory_uri()]);
     wp_enqueue_script('review-js');
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles' );

function enqueue_jquery() {
    wp_enqueue_script('jquery'); // Enqueue jQuery from WordPress core
}
add_action('wp_enqueue_scripts', 'enqueue_jquery');
// End Global
function theme_nav_config(){
    // menu_id/location_id => menu name
    register_nav_menus(array(
        "theme_primary_menu" => "Primary Menu GCE Theme"
    ));
}
add_action("after_setup_theme", "theme_nav_config");

//  Theme Support
function theme_support(){
    add_theme_support('title-tag');
    add_theme_support('widgets');

    add_theme_support(
        'html5',
        array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            'navigation-widgets',
        )
    );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
}
add_action('after_setup_theme', 'theme_support');

// Adds Theme Menu
function theme_menu(){
    
    $locations = array(
        'top-menu' => "Top Menu Location",
        'mobile-menu' => " Mobile Menu Location"
    );
    register_nav_menus($locations);

    
}
add_action('init', 'theme_menu');

// Configure SMTP (SMTP Plugin not need if using the code below)
// function custom_configure_smtp($phpmailer) {
//     $phpmailer->isSMTP();
//     $phpmailer->Host = SMTP_HOST; 
//     $phpmailer->SMTPAuth = SMTP_AUTH;
//     $phpmailer->Port = SMTP_PORT; 
//     $phpmailer->Username = SMTP_USER; 
//     $phpmailer->Password = SMTP_PASS; 
//     $phpmailer->SMTPSecure = SMTP_SECURE; 
//     $phpmailer->From = SMTP_FROM; 
//     $phpmailer->FromName = SMTP_NAME; 
// }
// add_action('phpmailer_init', 'custom_configure_smtp');
?>
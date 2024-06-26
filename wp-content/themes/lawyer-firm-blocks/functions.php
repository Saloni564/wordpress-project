<?php
/**
 * Lawyer Firm Blocks functions and definitions
 *
 * @package Lawyer Firm Blocks
 */

if ( ! function_exists( 'lawyer_firm_blocks_setup' ) ) :
function lawyer_firm_blocks_setup() {
	
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
			
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Enqueue editor styles.
	add_editor_style( array( 'assets/css/editor-style.css' ) );
	
}
endif; // lawyer_firm_blocks_setup
add_action( 'after_setup_theme', 'lawyer_firm_blocks_setup' );

function lawyer_firm_blocks_scripts() {
	wp_enqueue_style( 'lawyer-firm-blocks-basic-style', get_stylesheet_uri() );

	$lawyer_firm_blocks_enable_animations = get_option( 'lawyer_firm_blocks_enable_animations', true );

    if ( $lawyer_firm_blocks_enable_animations ) {
        //animation
		wp_enqueue_script( 'wow-js', get_theme_file_uri( '/assets/js/wow.js' ), array( 'jquery' ), true );

		wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.css' );
    }

	//font-awesome
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '5.15.3' );

	// script.js
	wp_enqueue_script('lawyer-firm-blocks-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'lawyer_firm_blocks_scripts' );

/// Get start function
function lawyer_firm_blocks_custom_admin_notice() {
    // Check if the notice is dismissed
    if (!get_user_meta(get_current_user_id(), 'dismissed_admin_notice', true)) {
        // Check if not on the theme documentation page
        $lawyer_firm_blocks_current_screen = get_current_screen();
        if ($lawyer_firm_blocks_current_screen && $lawyer_firm_blocks_current_screen->id !== 'appearance_page_lawyer-firm-blocks-guide-page') {
            $lawyer_firm_blocks_theme = wp_get_theme();
            ?>
            <div class="notice notice-info is-dismissible">
                <div class="notice-div">
                    <div>
                        <p class="theme-name"><?php echo esc_html($lawyer_firm_blocks_theme->get('Name')); ?></p>
                        <p><?php _e('For information and detailed instructions, check out our theme documentation.', 'lawyer-firm-blocks'); ?></p>
                    </div>
                    <a class="button-primary" href="themes.php?page=lawyer-firm-blocks-guide-page"><?php _e('Theme Documentation', 'lawyer-firm-blocks'); ?></a>
                </div>
            </div>
        <?php
        }
    }
}
add_action('admin_notices', 'lawyer_firm_blocks_custom_admin_notice');
// Dismiss notice function
function lawyer_firm_blocks_dismiss_admin_notice() {
    update_user_meta(get_current_user_id(), 'dismissed_admin_notice', true);
}
add_action('wp_ajax_lawyer_firm_blocks_dismiss_admin_notice', 'lawyer_firm_blocks_dismiss_admin_notice');
// Enqueue scripts and styles
function lawyer_firm_blocks_enqueue_admin_script($hook) {
    // Admin JS
    wp_enqueue_script('lawyer-firm-blocks-admin.js', get_theme_file_uri('/inc/dashboard/admin.js'), array('jquery'), true);
	
	wp_localize_script('lawyer-firm-blocks-admin.js', 'lawyer_firm_blocks_scripts_localize', array(
        'ajax_url' => esc_url(admin_url('admin-ajax.php'))
    ));
}
add_action('admin_enqueue_scripts', 'lawyer_firm_blocks_enqueue_admin_script');
// Reset the dismissed notice status when the theme is switched
function lawyer_firm_blocks_after_switch_theme() {
    delete_user_meta(get_current_user_id(), 'dismissed_admin_notice');
}
add_action('after_switch_theme', 'lawyer_firm_blocks_after_switch_theme');
//get-start-function-end//

// Block Patterns.
require get_template_directory() . '/block-patterns.php';

require get_parent_theme_file_path( '/inc/dashboard/dashboard.php' );

require get_template_directory() . '/custom-setting.php';

require get_parent_theme_file_path( '/inc/customizer/customizer.php' );
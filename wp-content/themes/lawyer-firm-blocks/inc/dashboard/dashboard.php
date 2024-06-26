<?php

add_action( 'admin_menu', 'lawyer_firm_blocks_gettingstarted' );
function lawyer_firm_blocks_gettingstarted() {
	add_theme_page( esc_html__('Theme Documentation', 'lawyer-firm-blocks'), esc_html__('Theme Documentation', 'lawyer-firm-blocks'), 'edit_theme_options', 'lawyer-firm-blocks-guide-page', 'lawyer_firm_blocks_guide');
}

function lawyer_firm_blocks_admin_theme_style() {
   wp_enqueue_style('lawyer-firm-blocks-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'lawyer_firm_blocks_admin_theme_style');

if ( ! defined( 'LAWYER_FIRM_BLOCKS_SUPPORT' ) ) {
define('LAWYER_FIRM_BLOCKS_SUPPORT',__('https://wordpress.org/support/theme/lawyer-firm-blocks/','lawyer-firm-blocks'));
}
if ( ! defined( 'LAWYER_FIRM_BLOCKS_REVIEW' ) ) {
define('LAWYER_FIRM_BLOCKS_REVIEW',__('https://wordpress.org/support/theme/lawyer-firm-blocks/reviews/','lawyer-firm-blocks'));
}
if ( ! defined( 'LAWYER_FIRM_BLOCKS_LIVE_DEMO' ) ) {
define('LAWYER_FIRM_BLOCKS_LIVE_DEMO',__('https://trial.ovationthemes.com/lawyer-firm-blocks/','lawyer-firm-blocks'));
}
if ( ! defined( 'LAWYER_FIRM_BLOCKS_BUY_PRO' ) ) {
define('LAWYER_FIRM_BLOCKS_BUY_PRO',__('https://www.ovationthemes.com/products/law-firm-wordpress-theme/','lawyer-firm-blocks'));
}
if ( ! defined( 'LAWYER_FIRM_BLOCKS_PRO_DOC' ) ) {
define('LAWYER_FIRM_BLOCKS_PRO_DOC',__('https://trial.ovationthemes.com/docs/ot-lawyer-firm-blocks-pro-doc/','lawyer-firm-blocks'));
}
if ( ! defined( 'LAWYER_FIRM_BLOCKS_FREE_DOC' ) ) {
define('LAWYER_FIRM_BLOCKS_FREE_DOC',__('https://trial.ovationthemes.com/docs/ot-lawyer-firm-blocks-free-doc/','lawyer-firm-blocks'));
}
if ( ! defined( 'LAWYER_FIRM_BLOCKS_THEME_NAME' ) ) {
define('LAWYER_FIRM_BLOCKS_THEME_NAME',__('Premium Apartment Theme','lawyer-firm-blocks'));
}

/**
 * Theme Info Page
 */
function lawyer_firm_blocks_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="col-md-10">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'lawyer-firm-blocks'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="col-md-2">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( LAWYER_FIRM_BLOCKS_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'lawyer-firm-blocks'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( LAWYER_FIRM_BLOCKS_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'lawyer-firm-blocks'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="container">
			<div class="col-md-9">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','lawyer-firm-blocks'); ?></h3>
					<p><?php $theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','lawyer-firm-blocks'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','lawyer-firm-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','lawyer-firm-blocks'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','lawyer-firm-blocks'); ?></h4>
					<p><?php esc_html_e('To check your website click here','lawyer-firm-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','lawyer-firm-blocks'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','lawyer-firm-blocks'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','lawyer-firm-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( LAWYER_FIRM_BLOCKS_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','lawyer-firm-blocks'); ?></a>
				</div>
       	</div>
			<div class="col-md-3">
				<h3><?php echo esc_html(LAWYER_FIRM_BLOCKS_THEME_NAME); ?></h3>
				<img class="lawyer_firm_blocks_img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<hr>
			    	<a class="button-primary livedemo" href="<?php echo esc_url( LAWYER_FIRM_BLOCKS_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'lawyer-firm-blocks'); ?></a>
					<a class="button-primary buynow" href="<?php echo esc_url( LAWYER_FIRM_BLOCKS_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'lawyer-firm-blocks'); ?></a>
					<a class="button-primary docs" href="<?php echo esc_url( LAWYER_FIRM_BLOCKS_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'lawyer-firm-blocks'); ?></a>
					<hr>
				</div>
				<ul style="padding-top:10px">
					<li class="upsell-lawyer_firm_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'lawyer-firm-blocks');?> </li>                 
					<li class="upsell-lawyer_firm_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'lawyer-firm-blocks');?> </li>
					<li class="upsell-lawyer_firm_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'lawyer-firm-blocks');?> </li>
					<li class="upsell-lawyer_firm_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'lawyer-firm-blocks');?> </li>
					<li class="upsell-lawyer_firm_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'lawyer-firm-blocks');?> </li>
					<li class="upsell-lawyer_firm_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'lawyer-firm-blocks');?> </li>
					<li class="upsell-lawyer_firm_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'lawyer-firm-blocks');?> </li>
					<li class="upsell-lawyer_firm_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'lawyer-firm-blocks');?> </li>
					<li class="upsell-lawyer_firm_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'lawyer-firm-blocks');?> </li>
					<li class="upsell-lawyer_firm_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'lawyer-firm-blocks');?> </li>
					<li class="upsell-lawyer_firm_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'lawyer-firm-blocks');?> </li>
            	<li class="upsell-lawyer_firm_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'lawyer-firm-blocks');?> </li>
            	<li class="upsell-lawyer_firm_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'lawyer-firm-blocks');?> </li>
             	<li class="upsell-lawyer_firm_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'lawyer-firm-blocks');?> </li>
         	</ul>
        	</div>
		</div>
	</div>

<?php }?>
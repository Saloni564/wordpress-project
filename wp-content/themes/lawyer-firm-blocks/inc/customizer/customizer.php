<?php
/**
 * Lawyer Firm Blocks: Customizer
 *
 * @subpackage Lawyer Firm Blocks
 * @since 1.0
 */

function lawyer_firm_blocks_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

	// Pro Section
 	$wp_customize->add_section('lawyer_firm_blocks_pro', array(
        'title'    => __('LAWYER FIRM BLOCKS PREMIUM ', 'lawyer-firm-blocks'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('lawyer_firm_blocks_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Lawyer_Firm_Blocks_Pro_Control($wp_customize, 'lawyer_firm_blocks_pro', array(
        'label'    => __('LAWYER FIRM BLOCKS PREMIUM', 'lawyer-firm-blocks'),
        'section'  => 'lawyer_firm_blocks_pro',
        'settings' => 'lawyer_firm_blocks_pro',
        'priority' => 1,
    )));
}
add_action( 'customize_register', 'lawyer_firm_blocks_customize_register' );


define('LAWYER_FIRM_BLOCKS_PRO_LINK',__('https://www.ovationthemes.com/products/law-firm-wordpress-theme/','lawyer-firm-blocks'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Lawyer_Firm_Blocks_Pro_Control')):
    class Lawyer_Firm_Blocks_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( LAWYER_FIRM_BLOCKS_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE LAWYER FIRM PREMIUM ','lawyer-firm-blocks');?> </a>
	        </div>
            <div class="col-md">
                <img class="lawyer_firm_blocks_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
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
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( LAWYER_FIRM_BLOCKS_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE LAWYER FIRM PREMIUM ','lawyer-firm-blocks');?> </a>
            </div>
        </label>
    <?php } }
endif;
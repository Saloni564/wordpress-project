<?php 

function lawyer_firm_blocks_add_admin_menu() {
    add_menu_page(
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'lawyer-firm-blocks-theme-settings', // Menu slug
        'lawyer_firm_blocks_settings_page' // Function to display the page
    );
}
add_action( 'admin_menu', 'lawyer_firm_blocks_add_admin_menu' );

function lawyer_firm_blocks_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Theme Settings', 'lawyer-firm-blocks' ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'lawyer_firm_blocks_settings_group' );
            do_settings_sections( 'lawyer-firm-blocks-theme-settings' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function lawyer_firm_blocks_register_settings() {
    register_setting( 'lawyer_firm_blocks_settings_group', 'lawyer_firm_blocks_enable_animations' );

    add_settings_section(
        'lawyer_firm_blocks_settings_section',
        __( 'Animation Settings', 'lawyer-firm-blocks' ),
        null,
        'lawyer-firm-blocks-theme-settings'
    );

    add_settings_field(
        'lawyer_firm_blocks_enable_animations',
        __( 'Enable Animations', 'lawyer-firm-blocks' ),
        'lawyer_firm_blocks_enable_animations_callback',
        'lawyer-firm-blocks-theme-settings',
        'lawyer_firm_blocks_settings_section'
    );
}
add_action( 'admin_init', 'lawyer_firm_blocks_register_settings' );

function lawyer_firm_blocks_enable_animations_callback() {
    $checked = get_option( 'lawyer_firm_blocks_enable_animations', true );
    ?>
    <input type="checkbox" name="lawyer_firm_blocks_enable_animations" value="1" <?php checked( 1, $checked ); ?> />
    <?php
}


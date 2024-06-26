<?php
/**
 * Lawyer Firm Blocks: Block Patterns
 *
 * @since Lawyer Firm Blocks 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Lawyer Firm Blocks 1.0
 *
 * @return void
 */
function lawyer_firm_blocks_register_block_patterns() {
	$block_pattern_categories = array(
		'lawyer-firm-blocks'    => array( 'label' => __( 'Lawyer Firm Blocks', 'lawyer-firm-blocks' ) ),
	);

	$block_pattern_categories = apply_filters( 'lawyer_firm_blocks_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'lawyer_firm_blocks_register_block_patterns', 9 );

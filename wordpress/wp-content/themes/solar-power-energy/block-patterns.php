<?php
/**
 * Solar Power Energy: Block Patterns
 *
 * @since Solar Power Energy 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Solar Power Energy 1.0
 *
 * @return void
 */
function solar_power_energy_register_block_patterns() {
	$block_pattern_categories = array(
		'solar-power-energy'    => array( 'label' => __( 'Solar Power Energy', 'solar-power-energy' ) ),
	);

	$block_pattern_categories = apply_filters( 'solar_power_energy_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'solar_power_energy_register_block_patterns', 9 );

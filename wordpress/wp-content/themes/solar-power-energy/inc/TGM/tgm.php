<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function solar_power_energy_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Stackable - Gutenberg Blocks', 'solar-power-energy' ),
			'slug'             => 'stackable-ultimate-gutenberg-blocks',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	solar_power_energy_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'solar_power_energy_register_recommended_plugins' );
<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Custom Code', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'header_costom_code',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
			
			array(
				'id'       => 'custom_code',
				'type'     => 'ace_editor',
				'title'    => esc_html__( 'Custom Code', 'itpolly' ),
				'mode'     => 'javascript',
				'theme'    => 'chrome',
			),

		
		
		),
	)
);

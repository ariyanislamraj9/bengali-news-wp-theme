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
		'title'            => esc_html__( 'Header Text', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'header-text',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
			array(
                'id'       => 'location_name',
                'type'     => 'text',
                'title'    => __( 'Location Name', 'itpolly' ),
                'default'  => 'Dhaka',
				),
				
				array(
                'id'       => 'allmenu',
                'type'     => 'text',
                'title'    => __( 'All Menu Text', 'itpolly' ),
                'default'  => 'All',
				),
				
				
			array(
                'id'       => 'placeholder',
                'type'     => 'text',
                'title'    => __( 'Search placeholder', 'itpolly' ),
                'default'  => 'Write Here',
				),
				
			array(
                'id'       => 'search',
                'type'     => 'text',
                'title'    => __( 'Search Title', 'itpolly' ),
                'default'  => 'Search',
				),

		
		
		),
	)
);

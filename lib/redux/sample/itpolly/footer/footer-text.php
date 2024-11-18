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
		'title'            => esc_html__( 'Footer Text', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'footer_text_section',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'logo_menu',
				'type'     => 'switch',
				'title'    => esc_html__( 'Footer Menu', 'itpolly' ),
				'default'  => true,
				'on'       => 'Show',
				'off'      => 'Hide',
			),
			
				array(
                'id'       => 'faddress_title',
                'type'     => 'text',
                'title'    => __( 'Address Title', 'itpolly' ),
                'default'  => 'Address',
				),		
				
				array(
                'id'       => 'address_text',
                'type'     => 'editor',
                'title'    => __( 'Address Text', 'itpolly' ),
                'default'  => 'Address Details',
				),
				
			array(
                'id'       => 'editorial_one_title',
                'type'     => 'text',
                'title'    => __( 'Editorial One Title', 'itpolly' ),
                'default'  => 'Editorial Info Title',
				),
				
				
				array(
                'id'       => 'editorial_one_text',
                'type'     => 'editor',
                'title'    => __( 'Editorial One Text', 'itpolly' ),
                'default'  => 'Editorial Info Text',
				),
				

				
			array(
                'id'       => 'editorial_two_title',
                'type'     => 'text',
                'title'    => __( 'Editorial Two Title', 'itpolly' ),
                'default'  => 'Editorial Info Title',
				),
				
				
				array(
                'id'       => 'editorial_two_text',
                'type'     => 'editor',
                'title'    => __( 'Editorial Two Text', 'itpolly' ),
                'default'  => 'Editorial Info Text',
				),
				
					
				
				array(
                'id'       => 'copyright',
                'type'     => 'text',
                'title'    => __( 'Copyright Text', 'itpolly' ),
                'default'  => '© All rights reserved © AR NEWS PRO',
				),
				
				

		
		
		),
	)
);

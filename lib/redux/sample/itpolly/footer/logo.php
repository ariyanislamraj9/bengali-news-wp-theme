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
		'title'            => esc_html__( 'Footer Logo', 'itpolly' ),
		'desc'             => esc_html__( '', 'your-textdomain-here' ),
		'id'               => 'footer_logo_section',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
		
		
			array(
				'id'       => 'logo_menu',
				'type'     => 'switch',
				'title'    => esc_html__( 'Footer Logo and Menu', 'itpolly' ),
				'default'  => true,
				'on'       => 'Show',
				'off'      => 'Hide',
			),
			
			array(
				'id'       => 'footer_logo',
				'type'     => 'media',
				'required' => array( 'logo_menu', '=', true ),
				'title'    => esc_html__( 'Logo Uploader', 'itpolly' ),
				'desc'     => esc_html__( 'Logo Size Width 620px height 120px', 'itpolly' ),
				'subtitle' => esc_html__( 'Upload Your Logo', 'itpolly' ),
				'url'          => false,
				'preview'      => true,
				'preview_size' => 'full',
				'default'  => array(
                    'url' => get_template_directory_uri().'/assets/images/footer_logo.gif',
                ),
			),
			
		
			
			
			
			
			

			
			
		),
	)
);

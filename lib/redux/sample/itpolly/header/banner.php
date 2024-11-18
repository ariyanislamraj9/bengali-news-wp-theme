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
		'title'            => esc_html__( 'Banner', 'itpolly' ),
		'desc'             => esc_html__( '', 'your-textdomain-here' ),
		'id'               => 'banner_section',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
			array(
				'id'       => 'header_style',
				'type'     => 'switch',
				'title'    => esc_html__( 'Header Section Design', 'itpolly' ),
				'default'  => false,
				'on'       => 'Design One',
				'off'      => 'Design Two',
			),
			
			array(
				'id'       => 'banner_confiq',
				'required' => array( 'header_style', '=', true ),
				'type'     => 'switch',
				'title'    => esc_html__( 'Banner Configuration', 'itpolly' ),
				'default'  => true,
				'on'       => 'Image',
				'off'      => 'Code',
			),
			
			array(
				'id'       => 'banner',
				'type'     => 'media',
				'required' => array( 'banner_confiq', '=', true ),
				'title'    => esc_html__( 'Banner Uploader', 'itpolly' ),
				'desc'     => esc_html__( 'Banner Size Width 730px height 90px', 'itpolly' ),
				'subtitle' => esc_html__( 'Upload Your Banner', 'itpolly' ),
				'url'          => false,
				'preview'      => true,
				'preview_size' => 'full',
				'default'  => array(
                    'url' => get_template_directory_uri().'/assets/images/banner.jpg',
                ),
			),
			
			array(
                'id'       => 'banner-link',
				'required' => array( 'banner_confiq', '=', true ),
                'type'     => 'text',
                'title'    => __( 'Banner Link', 'itpolly' ),
                'default'  => 'https://www.ariyanislamraj.com',
				),
				
				array(
				'id'       => 'banner_code',
				'required' => array( 'banner_confiq', '=', false ),
				'type'     => 'ace_editor',
				'title'    => esc_html__( 'Banner Code', 'itpolly' ),
			),
			
		
				
			
			
			
			

			
			
		),
	)
);

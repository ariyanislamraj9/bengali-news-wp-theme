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
		'title'            => esc_html__( 'Logo & Favicon', 'itpolly' ),
		'desc'             => esc_html__( '', 'your-textdomain-here' ),
		'id'               => 'logofavicon',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
			array(
				'id'       => 'logo',
				'type'     => 'media',
				'title'    => esc_html__( 'Logo Uploader', 'itpolly' ),
				'desc'     => esc_html__( 'Logo Size Width 620px height 200px', 'itpolly' ),
				'subtitle' => esc_html__( 'Upload Your Logo', 'itpolly' ),
				'url'          => false,
				'preview'      => true,
				'preview_size' => 'full',
				'default'  => array(
                    'url' => get_template_directory_uri().'/assets/images/logo.gif',
                ),
			),
			
			
			array(
				'id'       => 'mobile_logo',
				'type'     => 'media',
				'title'    => esc_html__( 'Mobile Version Logo Unloader', 'itpolly' ),
				'desc'     => esc_html__( 'Logo Size Width 620px height 120px', 'itpolly' ),
				'subtitle' => esc_html__( 'Upload Your Logo For Mobile Version', 'itpolly' ),
				'url'          => false,
				'preview'      => true,
				'preview_size' => 'full',
				'default'  => array(
                    'url' => get_template_directory_uri().'/assets/images/footer_logo.gif',
                ),
			),
			
		
			array(
				'id'       => 'favicon',
				'type'     => 'media',
				'title'    => esc_html__( 'Favicon Uploader', 'itpolly' ),
				'desc'     => esc_html__( 'Favicon Size Width 500px height 500px', 'itpolly' ),
				'subtitle' => esc_html__( 'Upload Your Favicon', 'itpolly' ),
				'url'          => false,
				'preview'      => true,
				'preview_size' => 'full',
				'default'  => array(
                    'url' => get_template_directory_uri().'/assets/images/favicon.gif',
                ),
			),
			
			
			
			
			

			
			
		),
	)
);

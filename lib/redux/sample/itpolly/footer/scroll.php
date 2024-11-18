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
		'title'            => esc_html__( 'Footer Scroll', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'footer-scroll_section',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
			
			array(
				'id'       => 'footer_scroll',
				'type'     => 'switch',
				'title'    => esc_html__( 'Footer Scroll', 'itpolly' ),
				'default'  => true,
				'on'       => 'Enabled',
				'off'      => 'Disabled',
			),
			
			array(
                'id'       => 'footer_scroll_title',
				'required' => array( 'footer_scroll', '=', true ),
                'type'     => 'text',
                'title'    => __( 'Footer Scroll Title', 'itpolly' ),
                'default'  => 'News Title : ',
            ),
			
			array(
                'id'       => 'how_footer_scroll',
				'required' => array( 'footer_scroll', '=', true ),
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'itpolly' ),
                'default'  => 10,
            ),
			
			array(
				'id'       => 'footer-icon-settings',
				'type'     => 'switch',
				'title'    => esc_html__( 'Icon and Image', 'itpolly' ),
				'required' => array( 'footer_scroll', '=', true ),
				'default'  => true,
				'on'       => 'Icon',
				'off'      => 'Image',
			),
			
			array(
                'id'       => 'footer-scroll-icon',
				'required' => array( 'footer-icon-settings', '=', true ),
                'type'     => 'text',
                'title'    => __( 'Scrool Icon', 'itpolly' ),
				'desc'      => __('<a href="https://icons8.com/line-awesome" target="_blank"> Click Here For More Icons </a>', 'itpolly' ),
                'default'  => '<i class="las la-chevron-circle-left"></i>',
            ),
			
			array(
				'id'       => 'footer-scroll-image',
				'type'     => 'media',
				'title'    => esc_html__( 'Scroll Image Uploader', 'itpolly' ),
				'desc'     => esc_html__( 'Image Size Width 500px height 500px', 'itpolly' ),
				'subtitle' => esc_html__( 'Upload Your Image', 'itpolly' ),
				'required' => array( 'footer-icon-settings', '=', false ),
				'url'          => false,
				'preview'      => true,
				'preview_size' => 'full',
				'default'  => array(
                    'url' => get_template_directory_uri().'/assets/images/favicon.gif',
                ),
			),
			
			array(
			    'title' => __('Footer Scroll Setting', 'itpolly'),
				'id' => 'footer_scroll_settings',
				'required' => array( 'footer_scroll', '=', true ),
				'type' => 'button_set',
				   'options' => array(
                  '1' => 'Latest Post', 
                  '2' => 'Category Post', 
				  '3' => 'Custom Text', 
                 
                      ),
				  'default' => '1'
					  
				),
				
				array(
				'id'       => 'footer_scroll_cat',
				'required' => array( 'footer_scroll_settings', '=', '2' ),
				'type'     => 'select',
				'title'    => __( 'Select Scroll Category', 'itpolly' ),
				'subtitle'  => __( 'Please Select Your Category', 'itpolly' ),
				'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'itpolly' ),
				'default'  => '1',
				'data'  => 'category',
			),
			
           array(
                'id'       => 'footer_scroll_content',
				'required' => array( 'footer_scroll_settings', '=', '3' ),
                'type'     => 'editor',
                'title'    => __( 'Footer Scroll Content', 'itpolly' ),
                'default'  => 'Welcome To Our Website...',
            ), 
			
		
		
		),
	)
);

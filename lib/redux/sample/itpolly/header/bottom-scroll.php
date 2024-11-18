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
		'title'            => esc_html__( 'Bottom Scroll', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'bottom_scroll',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
			
			array(
				'id'       => 'bottomscroll',
				'type'     => 'switch',
				'title'    => esc_html__( 'Header Bottom Scroll', 'itpolly' ),
				'default'  => true,
				'on'       => 'Enabled',
				'off'      => 'Disabled',
			),
			
			array(
                'id'       => 'bottom_scroll_title',
				'required' => array( 'bottomscroll', '=', true ),
                'type'     => 'text',
                'title'    => __( 'Header Bottom Scroll Title', 'itpolly' ),
                'default'  => 'News Title : ',
            ),
			
			array(
                'id'       => 'how_bottom_scroll',
				'required' => array( 'bottomscroll', '=', true ),
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'itpolly' ),
                'default'  => 10,
            ),
			
			array(
				'id'       => 'bottom-icon-settings',
				'type'     => 'switch',
				'title'    => esc_html__( 'Icon and Image', 'itpolly' ),
				'required' => array( 'bottomscroll', '=', true ),
				'default'  => true,
				'on'       => 'Icon',
				'off'      => 'Image',
			),
			
			array(
                'id'       => 'bottom-scroll-icon',
				'required' => array( 'bottom-icon-settings', '=', true ),
                'type'     => 'text',
                'title'    => __( 'Scrool Icon', 'itpolly' ),
				'desc'      => __('<a href="https://icons8.com/line-awesome" target="_blank"> Click Here For More Icons </a>', 'itpolly' ),
                'default'  => '<i class="las la-bullseye"></i>',
            ),
			
			array(
				'id'       => 'bottom-scroll-image',
				'type'     => 'media',
				'title'    => esc_html__( 'Scroll Image Uploader', 'itpolly' ),
				'desc'     => esc_html__( 'Image Size Width 500px height 500px', 'itpolly' ),
				'subtitle' => esc_html__( 'Upload Your Image', 'itpolly' ),
				'required' => array( 'bottom-icon-settings', '=', false ),
				'url'          => false,
				'preview'      => true,
				'preview_size' => 'full',
				'default'  => array(
                    'url' => get_template_directory_uri().'/assets/images/favicon.gif',
                ),
			),
			
			array(
			    'title' => __('Bottom Scroll Setting', 'itpolly'),
				'id' => 'bottom_scroll_settings',
				'required' => array( 'bottomscroll', '=', true ),
				'type' => 'button_set',
				   'options' => array(
                  '1' => 'Latest Post', 
                  '2' => 'Category Post', 
				  '3' => 'Custom Text', 
                 
                      ),
				  'default' => '1'
					  
				),
				
				array(
				'id'       => 'bottom_scroll_cat',
				'required' => array( 'bottom_scroll_settings', '=', '2' ),
				'type'     => 'select',
				'title'    => __( 'Select Scroll Category', 'itpolly' ),
				'subtitle'  => __( 'Please Select Your Category', 'itpolly' ),
				'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'itpolly' ),
				'default'  => '1',
				'data'  => 'category',
			),
			
           array(
                'id'       => 'bottom_scroll_content',
				'required' => array( 'bottom_scroll_settings', '=', '3' ),
                'type'     => 'editor',
                'title'    => __( 'Header Bottom Scroll Content', 'itpolly' ),
                'default'  => 'Welcome To Our Website...',
            ), 
			
		
		
		),
	)
);

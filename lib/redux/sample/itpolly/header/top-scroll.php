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
		'title'            => esc_html__( 'Top Scroll', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'top_scroll',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
			
			array(
				'id'       => 'topscroll',
				'type'     => 'switch',
				'title'    => esc_html__( 'Header Top Scroll', 'itpolly' ),
				'default'  => true,
				'on'       => 'Enabled',
				'off'      => 'Disabled',
			),
			
			array(
                'id'       => 'top_scroll_title',
				'required' => array( 'topscroll', '=', true ),
                'type'     => 'text',
                'title'    => __( 'Header Top Scroll Title', 'itpolly' ),
                'default'  => 'News Title : ',
            ),
			
			array(
                'id'       => 'how_top_scroll',
				'required' => array( 'topscroll', '=', true ),
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'itpolly' ),
                'default'  => 10,
            ),
			
			array(
				'id'       => 'icon-settings',
				'type'     => 'switch',
				'title'    => esc_html__( 'Icon and Image', 'itpolly' ),
				'required' => array( 'topscroll', '=', true ),
				'default'  => true,
				'on'       => 'Icon',
				'off'      => 'Image',
			),
			
			array(
                'id'       => 'header-scrool-icon',
				'required' => array( 'icon-settings', '=', true ),
                'type'     => 'text',
                'title'    => __( 'Scrool Icon', 'itpolly' ),
				'desc'      => __('<a href="https://icons8.com/line-awesome" target="_blank"> Click Here For More Icons </a>', 'itpolly' ),
                'default'  => '<i class="las la-bullseye"></i>',
            ),
			
			array(
				'id'       => 'header-scroll-image',
				'type'     => 'media',
				'title'    => esc_html__( 'Scroll Image Uploader', 'itpolly' ),
				'desc'     => esc_html__( 'Image Size Width 500px height 500px', 'itpolly' ),
				'subtitle' => esc_html__( 'Upload Your Image', 'itpolly' ),
				'required' => array( 'icon-settings', '=', false ),
				'url'          => false,
				'preview'      => true,
				'preview_size' => 'full',
				'default'  => array(
                    'url' => get_template_directory_uri().'/assets/images/favicon.gif',
                ),
			),
			
			array(
			    'title' => __('Top Scrool Setting', 'itpolly'),
				'id' => 'scroll_settings',
				'required' => array( 'topscroll', '=', true ),
				'type' => 'button_set',
				   'options' => array(
                  '1' => 'Latest Post', 
                  '2' => 'Category Post', 
				  '3' => 'Custom Text', 
                 
                      ),
				  'default' => '1'
					  
				),
				
				array(
				'id'       => 'top_scroll_cat',
				'required' => array( 'scroll_settings', '=', '2' ),
				//'required' => array( 'topscroll', '=', true ),
				'type'     => 'select',
				'title'    => __( 'Select Top Scroll Category', 'itpolly' ),
				'subtitle'  => __( 'Please Select Your Category', 'itpolly' ),
				'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'itpolly' ),
				'default'  => '1',
				'data'  => 'category',
			),
			
           array(
                'id'       => 'top_scroll_content',
				'required' => array( 'scroll_settings', '=', '3' ),
				//'required' => array( 'topscroll', '=', true ),
                'type'     => 'editor',
                'title'    => __( 'Header Top Scroll Content', 'itpolly' ),
                'default'  => 'Welcome To Our Website...',
            ), 
			
		
		
		),
	)
);

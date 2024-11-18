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
		'title'            => esc_html__( 'Facebook', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'social_facebook',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
			array(
				'id'       => 'facebook',
				'type'     => 'switch',
				'title'    => esc_html__( 'Facebook', 'itpolly' ),
				'default'  => true,
				'on'       => 'Facebook Show',
				'off'      => 'Facebook Hide',
			),
			
		
			  array(
				'required' => array( 'facebook', '=', true ),
                'id'       => 'facebook_title',
                'type'     => 'text',
                'title'    => __( 'Facebook Title', 'itpolly' ),
                'default'  => 'Our Like Page',
				
            ),
			  array(
			    'title' => __('Facebook Link', 'itpolly'),
				'required' => array( 'facebook', '=', true ),
				'id' => 'facebook_link',
				'type' => 'text',
				'default' => 'https://www.facebook.com/ariyanislamraj2030',
				
			  ),
			  array(
                'id'       => 'facebook_width',
				'required' => array( 'facebook', '=', true ),
                'type'     => 'text',
                'title'    => __( 'Facebook width', 'itpolly' ),
                'default'  => '260',
            ),
            array(
                'id'       => 'facebook_height',
				'required' => array( 'facebook', '=', true ),
                'type'     => 'text',
                'title'    => __( 'Facebook Height', 'itpolly' ),
                'default'  => '170',
            ),
			
			array(
				'id'       => 'timeline',
				'required' => array( 'facebook', '=', true ),
				'type'     => 'checkbox',
				'title'    => esc_html__( 'Facebook Timeline Active', 'itpolly' ),
				'desc'     => esc_html__( 'Active Facebook Page Newsfeed', 'itpolly' ),
				'default'  => 1, 
			),
			
			
			array(
				'id'       => 'facebook_confiq',
				'type'     => 'switch',
				'title'    => esc_html__( 'Facebook Share Configuration', 'itpolly' ),
				'default'  => true,
				'on'       => 'Active',
				'off'      => 'InActive',
			),
			

			array(
				'id'       => 'facebook_ogimage',
				'type'     => 'media',
				'required' => array( 'facebook_confiq', '=', true ),
				'title'    => esc_html__( 'Facebook OG Image Uploader', 'itpolly' ),
				'desc'     => esc_html__( 'Image Size Width 700px height 390px', 'itpolly' ),
				'subtitle' => esc_html__( 'Upload Your Image', 'itpolly' ),
				'url'          => false,
				'preview'      => true,
				'preview_size' => 'full',
				'default'  => array(
                    'url' => get_template_directory_uri().'/assets/images/lazy.jpg',
                ),
			),
			
			array(
                'id'       => 'facebook_ogtitle',
				'required' => array( 'facebook_confiq', '=', true ),
                'type'     => 'text',
                'title'    => __( 'Facebook Share Title With Your Website Name', 'itpolly' ),
                'default'  => '| Your Website Name',
				),
			
			array(
                'id'       => 'facebook_ogdes',
				'required' => array( 'facebook_confiq', '=', true ),
                'type'     => 'text',
                'title'    => __( 'Facebook OG Description', 'itpolly' ),
                'default'  => 'This is facebook og Description',
				),
				
				array(
                'id'       => 'facebook_app_id',
				'required' => array( 'facebook_confiq', '=', true ),
                'type'     => 'text',
                'title'    => __( 'Facebook App ID', 'itpolly' ),
                'default'  => '',
				),
				
				array(
                'id'       => 'facebook_pages',
				'required' => array( 'facebook_confiq', '=', true ),
                'type'     => 'text',
                'title'    => __( 'Facebook Page ID', 'itpolly' ),
                'default'  => '',
				),
				
	
			
		
				
			
			
			
			

			
			
		),
	)
);

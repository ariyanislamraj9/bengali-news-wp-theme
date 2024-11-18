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
		'title'            => esc_html__( 'Twitter', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'social_Twitter',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
			
			array(
				'id'       => 'twitter',
				'type'     => 'switch',
				'title'    => esc_html__( 'Twitter', 'itpolly' ),
				'default'  => true,
				'on'       => 'Twitter Show',
				'off'      => 'Twitter Hide',
			),
			
		
			  array(
				'required' => array( 'twitter', '=', true ),
                'id'       => 'twitter_title',
                'type'     => 'text',
                'title'    => __( 'Twitter Title', 'itpolly' ),
                'default'  => 'Our Like Page',
				
            ),
			
			array(
				'required' => array( 'twitter', '=', true ),
                'id'       => 'twitter_link',
                'type'     => 'text',
                'title'    => __( 'Twitter Link', 'itpolly' ),
                'default'  => 'https://www.twitter.com/wordpress',
				
            ),
			
			  array(
                'id'       => 'twitter_width',
				'required' => array( 'twitter', '=', true ),
                'type'     => 'text',
                'title'    => __( 'Twitter width', 'itpolly' ),
                'default'  => '410',
            ),
            array(
                'id'       => 'twitter_height',
				'required' => array( 'twitter', '=', true ),
                'type'     => 'text',
                'title'    => __( 'Twitter Height', 'itpolly' ),
                'default'  => '220',
            ),
			
			array(
				'id'       => 'twitter_theme',
				'required' => array( 'twitter', '=', true ),
				'type'     => 'switch',
				'title'    => esc_html__( 'Twitter Theme', 'itpolly' ),
				'default'  => true,
				'on'       => 'Light',
				'off'      => 'Dark',
			),
					
			array(
				'id'       => 'twitter_confiq',
				'type'     => 'switch',
				'title'    => esc_html__( 'Twitter Share Configuration', 'itpolly' ),
				'default'  => true,
				'on'       => 'Active',
				'off'      => 'InActive',
			),
			
	
			
			array(
				'id'       => 'twitter_ogimage',
				'type'     => 'media',
				'required' => array( 'twitter_confiq', '=', true ),
				'title'    => esc_html__( 'Twitter OG Image Uploader', 'itpolly' ),
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
                'id'       => 'twitter_ogtitle',
				'required' => array( 'twitter_confiq', '=', true ),
                'type'     => 'text',
                'title'    => __( 'Twitter Share Title With Your Website Name', 'itpolly' ),
                'default'  => '| Your Website Name',
				),
			
			array(
                'id'       => 'twitter_ogdes',
				'required' => array( 'twitter_confiq', '=', true ),
                'type'     => 'text',
                'title'    => __( 'twitter OG Description', 'itpolly' ),
                'default'  => 'This is twitter og Description',
				),
				
				array(
                'id'       => 'twitter_username',
				'required' => array( 'twitter_confiq', '=', true ),
                'type'     => 'text',
                'title'    => __( 'Twitter User Name', 'itpolly' ),
                'default'  => '@itpolly',
				),
				
							
	

			
			
		),
	)
);

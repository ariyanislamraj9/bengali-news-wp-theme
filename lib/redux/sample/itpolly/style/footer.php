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
		'title'            => esc_html__( 'Footer', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'style_footer',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
			array(
				'id'   => 'style_footer_one',
				'type' => 'divide',
			),
			
			array(
                    'id'       => 'footer_background',
                    'type'     => 'color',
                    'title'    => __('Footer Background', 'itpolly'),
                    'default'  => '#000000',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'footer_font',
                    'type'     => 'typography',
                    'title'    => __('Footer Font', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
                    'font-size' => false,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#ffffff', 
                ) ),
				
				array(
				'id'   => 'style_footer_two',
				'type' => 'divide',
			),
				
				array(
                    'id'       => 'footer_scroll_background',
                    'type'     => 'color',
                    'title'    => __('Footer Scroll Title Background', 'itpolly'),
                    'default'  => '#540A0A',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'footer_scroll_font',
                    'type'     => 'typography',
                    'title'    => __('Footer Scroll Title Font', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
                    'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#ffffff', 
						 'font-size' => '18px',
                ) ),
				
				array(
                    'id'       => 'footer_scroll_content_background',
                    'type'     => 'color',
                    'title'    => __('Footer Scroll Content Background', 'itpolly'),
                    'default'  => '#F0F8FF',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'footer_scroll_content_font',
                    'type'     => 'typography',
                    'title'    => __('Footer Scroll Content Font', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
                    'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#000000', 
						 'font-size' => '18px',
                ) ),
				
				array(
				'id'   => 'style_footer_three',
				'type' => 'divide',
			),
	
			
		
				
			
			
			
			

			
			
		),
	)
);

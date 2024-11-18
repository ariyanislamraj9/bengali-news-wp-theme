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
		'title'            => esc_html__( 'Header', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'style_header',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
				array(
				'id'   => 'style_header_one',
				'type' => 'divide',
			),
			
			array(
                    'id'       => 'body_background',
                    'type'     => 'color',
                    'title'    => __('Body Background', 'itpolly'),
                    'default'  => '#FFFFFF',
                ),
				
			array(
                    'id'       => 'body_font',
                    'type'     => 'typography',
                    'title'    => __('Body Font', 'itpolly'),
                    'subtitle' => __('Please Set Here Body Font', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => true,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
                    'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#000000', 
                         'font-weight' => '400',
						 'font-size' => '18px',
                ) ),
				
				array(
                    'id'       => 'default_hover',
                    'type'     => 'color',
                    'title'    => __('All Link Default Hover Color', 'itpolly'),
                    'default'  => '#014F06',
                    'validate' => 'color',
                ),
				
				array(
				'id'   => 'style_header_two',
				'type' => 'divide',
			),
				
				
				array(
                    'id'       => 'header_background',
                    'type'     => 'color',
                    'title'    => __('Header Background', 'itpolly'),
                    'default'  => '#FFFFFF',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'header_font',
                    'type'     => 'typography',
                    'title'    => __('Header Font', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
                    'font-size' => false,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#000000', 
                ) ),
				
				array(
				'id'   => 'style_header_three',
				'type' => 'divide',
			),
			
			array(
			    'title' => __('Menu Settings', 'itpolly'),
				'id' => 'menu_settings',
				'type' => 'button_set',
				   'options' => array(
                  '1' => 'Fixed', 
                  '2' => 'Static', 
                 
                      ),
				  'default' => '1'
					  
				),
				
				array(
                    'id'       => 'menu_background',
                    'type'     => 'color',
                    'title'    => __('Menu Background', 'itpolly'),
                    'default'  => '#f0f0ed',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'menu_font',
                    'type'     => 'typography',
                    'title'    => __('Menu Font', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
                    'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#fff', 
						 'font-size' => '18px',
                ) ),
				

				array(
					'id'             => 'menu_padding',
					'type'           => 'spacing',
					'mode'           => 'margin',
					'units'          => array('px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Menu Font Spacing', 'itpolly'),
					'default'            => array(
						'margin-top'     => '15px', 
						'margin-right'   => '10px', 
						'margin-bottom'  => '15px', 
						'margin-left'    => '10px',
						'units'          => 'px', 
					)
				),
				
				array(
                    'id'       => 'active_menu_background',
                    'type'     => 'color',
                    'title'    => __('Active Menu Background', 'itpolly'),
                    'default'  => '#012E48',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'active_menu_font',
                    'type'     => 'typography',
                    'title'    => __('Active Menu font', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
                    'font-size' => false,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#fff', 
                ) ),
				
				array(
				'id'   => 'style_header_four',
				'type' => 'divide',
			),
				
				array(
                    'id'       => 'top_scroll_background',
                    'type'     => 'color',
                    'title'    => __('Scroll Title Background', 'itpolly'),
                    'default'  => '#19232D',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'top_scroll_font',
                    'type'     => 'typography',
                    'title'    => __('Scroll Title Font', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
                    'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#fff', 
						 'font-size' => '18px',
                ) ),
				
				array(
                    'id'       => 'top_scroll_content_background',
                    'type'     => 'color',
                    'title'    => __('Scroll Content Background', 'itpolly'),
                    'default'  => '#F1FCFF',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'top_scroll_content_font',
                    'type'     => 'typography',
                    'title'    => __('Scroll Content Font', 'itpolly'),
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
				'id'   => 'style_header_five',
				'type' => 'divide',
			),
			
				
				
		
				

			
			

			
			
		),
	)
);

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
		'title'            => esc_html__( 'Single Page', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'style_single_page',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
			array(
				'id'   => 'style_single_one',
				'type' => 'divide',
			),
			
			
			array(
                    'id'       => 'sub_title_font',
                    'type'     => 'typography',
                    'title'    => __('Sub Title Font Color and Size', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
                    'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#00315e', 
						 'font-size' => '24px',
                ) ),
				
				array(
                    'id'       => 'title_font',
                    'type'     => 'typography',
                    'title'    => __('Title Font Color and Size', 'itpolly'),
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
						 'font-size' => '28px',
                ) ),
				
				array(
				'id'   => 'style_single_two',
				'type' => 'divide',
			),
				
				array(
                    'id'       => 'more_news_title',
                    'type'     => 'typography',
                    'title'    => __('More News Title Font Color and Size', 'itpolly'),
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
						 'font-size' => '20px',
                ) ),
				
				array(
				'id'   => 'style_single_three',
				'type' => 'divide',
			),
			
			array(
                    'id'       => 'single_tab_back',
                    'type'     => 'color',
                    'title'    => __('Single Tab Background', 'itpolly'),
                    'default'  => '#dddddd',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'single_tab_font',
                    'type'     => 'typography',
                    'title'    => __('Single Tab Font Color and Size', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
                    'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#000D39', 
						 'font-size' => '20px',
                ) ),
				
				array(
                    'id'       => 'single_tab_active_back',
                    'type'     => 'color',
                    'title'    => __('Single Tab Active Background', 'itpolly'),
                    'default'  => '#ffffff',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'single_tab_active_font',
                    'type'     => 'typography',
                    'title'    => __('Single Tab Active Font Color and Size', 'itpolly'),
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
						 'font-size' => '20px',
                ) ),
			
			array(
                    'id'       => 'single_tab_news_title',
                    'type'     => 'typography',
                    'title'    => __('Single Tab News Title', 'itpolly'),
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
				'id'   => 'style_single_four',
				'type' => 'divide',
			),
			
				
	
			
		
				
			
			
			
			

			
			
		),
	)
);

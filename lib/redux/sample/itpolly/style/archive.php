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
		'title'            => esc_html__( 'Archive Page', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'style_archive_page',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
			array(
				'id'   => 'style_archive_one',
				'type' => 'divide',
			),
			
			
			array(
                    'id'       => 'archive_news_title_one',
                    'type'     => 'typography',
                    'title'    => __('Archive News Title One', 'itpolly'),
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
						 'font-size' => '23px',
                ) ),
				
				array(
                    'id'       => 'archive_news_title_two',
                    'type'     => 'typography',
                    'title'    => __('Archive News Title Two', 'itpolly'),
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
                    'id'       => 'archive_news_title_three',
                    'type'     => 'typography',
                    'title'    => __('Archive News Title Three', 'itpolly'),
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
						 'font-size' => '23px',
                ) ),
				
				array(
				'id'   => 'style_archive_two',
				'type' => 'divide',
			),
			
			array(
                    'id'       => 'archive_tab_back',
                    'type'     => 'color',
                    'title'    => __('Archive Tab Background', 'itpolly'),
                    'default'  => '#dddddd',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'archive_tab_font',
                    'type'     => 'typography',
                    'title'    => __('Archive Tab Font Color and Size', 'itpolly'),
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
                    'id'       => 'archive_tab_active_back',
                    'type'     => 'color',
                    'title'    => __('Archive Tab Active Background', 'itpolly'),
                    'default'  => '#ffffff',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'archive_tab_active_font',
                    'type'     => 'typography',
                    'title'    => __('Archive Tab Active Font Color and Size', 'itpolly'),
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
                    'id'       => 'archive_tab_news_title',
                    'type'     => 'typography',
                    'title'    => __('Archive Tab News Title', 'itpolly'),
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
				'id'   => 'style_archive_three',
				'type' => 'divide',
			),
			
			
				
	
			
		
				
			
			
			
			

			
			
		),
	)
);

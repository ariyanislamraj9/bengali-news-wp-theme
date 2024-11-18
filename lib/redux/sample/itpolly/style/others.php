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
		'title'            => esc_html__( 'Others Page', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'style_others_page',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
			array(
				'id'   => 'style_others_one',
				'type' => 'divide',
			),
			
			
			array(
                    'id'       => 'gallery_caption_title',
                    'type'     => 'typography',
                    'title'    => __('Gallery Page Caption Title', 'itpolly'),
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
				'id'   => 'style_others_two',
				'type' => 'divide',
			),
			
			array(
                    'id'       => 'goto_top_bac',
                    'type'     => 'color',
                    'title'    => __('Go To Top Button Background', 'itpolly'),
                    'default'  => '#19232D',
                ),
				
				array(
                    'id'       => 'goto_top_border',
                    'type'     => 'color',
                    'title'    => __('Go To Top Button Border', 'itpolly'),
                    'default'  => '#B3D7EC',
                ),
				
				array(
                    'id'       => 'goto_top_color',
                    'type'     => 'color',
                    'title'    => __('Go To Top Button Color', 'itpolly'),
                    'default'  => '#ffffff',
                ),
			
			
			
			array(
				'id'   => 'style_others_three',
				'type' => 'divide',
			),
			
				
	
			
		
				
			
			
			
			

			
			
		),
	)
);

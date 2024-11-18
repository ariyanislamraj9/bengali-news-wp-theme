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
		'title'            => esc_html__( 'HomePage', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'style_homepage',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			

			array(
				'id'   => 'style_homepage_one',
				'type' => 'divide',
			),
			
			
				
			array(
                    'id'       => 'photogallery_title_font',
                    'type'     => 'typography',
                    'title'    => __('Photo Gallery Title Font', 'itpolly'),
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
						 'font-size' => '20px',
                ) ),
				

				array(
				'id'   => 'style_homepage_four',
				'type' => 'divide',
			),
			
			array(
                    'id'       => 'tab_back',
                    'type'     => 'color',
                    'title'    => __('Tab Background', 'itpolly'),
                    'default'  => '#19232D',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'tab_font',
                    'type'     => 'typography',
                    'title'    => __('Tab Font Color and Size', 'itpolly'),
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
						 'font-size' => '20px',
                ) ),
				
				array(
                    'id'       => 'tab_active_back',
                    'type'     => 'color',
                    'title'    => __('Tab Active Background', 'itpolly'),
                    'default'  => '#FFFFFF',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'tab_active_font',
                    'type'     => 'typography',
                    'title'    => __('Tab Active Font Color and Size', 'itpolly'),
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
                    'id'       => 'tab_news_title',
                    'type'     => 'typography',
                    'title'    => __('Tab News Title', 'itpolly'),
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
				'id'   => 'style_homepage_five',
				'type' => 'divide',
			),
			
			array(
                    'id'       => 'sec_one_title_one',
                    'type'     => 'typography',
                    'title'    => __('Section One News Title One', 'itpolly'),
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
						 'font-size' => '24px',
                ) ),
				
				array(
                    'id'       => 'sec_one_title_two',
                    'type'     => 'typography',
                    'title'    => __('Section One News Title Two', 'itpolly'),
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
                    'id'       => 'sec_one_title_three',
                    'type'     => 'typography',
                    'title'    => __('Section One News Title Three', 'itpolly'),
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
				'id'   => 'style_homepage_six',
				'type' => 'divide',
			),
			
			array(
                    'id'       => 'sec_two_back',
                    'type'     => 'color',
                    'title'    => __('Section Two Background', 'itpolly'),
                    'default'  => '#212121',
                    'validate' => 'color',
                ),
			
			array(
                    'id'       => 'sec_two_title_one',
                    'type'     => 'typography',
                    'title'    => __('Section Two  News Title One', 'itpolly'),
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
						 'font-size' => '20px',
                ) ),
				
				
				
				array(
				'id'   => 'style_homepage_seven',
				'type' => 'divide',
			),
			
			array(
                    'id'       => 'sec_three_title_one',
                    'type'     => 'typography',
                    'title'    => __('Section Three News Title', 'itpolly'),
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
                    'id'       => 'sec_three_title_two',
                    'type'     => 'typography',
                    'title'    => __('Section Three News Title Two', 'itpolly'),
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
				'id'   => 'style_homepage_eight',
				'type' => 'divide',
			),
			
			array(
                    'id'       => 'sec_four_title_one',
                    'type'     => 'typography',
                    'title'    => __('Section Four, Section Six, Section Eight Title', 'itpolly'),
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
						 'font-size' => '20px',
                ) ),
				
				
				array(
				'id'   => 'style_homepage_nine',
				'type' => 'divide',
			),
			
			array(
                    'id'       => 'sec_five_title_one',
                    'type'     => 'typography',
                    'title'    => __('Section Five, Section Seven, Section Ten Title One', 'itpolly'),
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
                    'id'       => 'sec_five_title_two',
                    'type'     => 'typography',
                    'title'    => __('Section Five, Section Seven, Section Ten Title Two', 'itpolly'),
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
				'id'   => 'style_homepage_ten',
				'type' => 'divide',
			),
			
			array(
                    'id'       => 'sec_nine_title_one',
                    'type'     => 'typography',
                    'title'    => __('Section Nine One Title', 'itpolly'),
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
						 'font-size' => '22px',
                ) ),
				
				array(
                    'id'       => 'sec_nine_title_two',
                    'type'     => 'typography',
                    'title'    => __('Section Nine Two Title', 'itpolly'),
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
						 'font-size' => '20px',
                ) ),
				
				array(
				'id'   => 'style_homepage_eleven',
				'type' => 'divide',
			),
				
			
			array(
                    'id'       => 'sec_eleven_title_one',
                    'type'     => 'typography',
                    'title'    => __('Section Eleven Title', 'itpolly'),
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
						 'font-size' => '19px',
                ) ),
				
				

		
				array(
				'id'   => 'style_homepage_eleven000',
				'type' => 'divide',
			),
	
			
		
				
			
			
			
			

			
			
		),
	)
);

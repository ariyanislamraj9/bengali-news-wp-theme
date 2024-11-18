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
		'title'            => esc_html__( 'Section Settings', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'section_section',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
					  
		  array(
				'id'       => 'section_settings',
				'type'     => 'sorter',
				'title'    => 'Section Settings',
				'compiler' => 'true',
				'options'  => array(
					'Show'  => array(
						'ads-one' => 'Ads One',
						'section-one' => 'Section One',
						'ads-two'     => 'Ads Two',
						'section-two'     => 'Section Two',
						'ads-three' => 'Ads Three',
						'section-three' => 'Section Three',
						'ads-four'   => 'Ads Four',
						'section-four'   => 'Section Four',
						'ads-five'   => 'Ads Five',	
						'section-five'   => 'Section Five',					
						'ads-six'   => 'Ads Six',
						'section-six'   => 'Section Six',						
						'ads-seven'   => 'Ads Seven',
						'section-seven'   => 'Section Seven',						
						'ads-eight'   => 'Ads Eight',
						'section-eight'   => 'Section Eight',						
						'ads-nine'   => 'Ads Nine',
						'section-nine'   => 'Section Nine',
						'ads-ten'   => 'Ads Ten',
						'section-ten'   => 'Section Ten',
						'section-eleven'   => 'Section Eleven',
						'section-twelve'   => 'Section Twelve',
						'photo-gallery'   => 'Photo Gallery',
						
					),
					'Hide' => array(),
				),
				'default' => 0,
		
			),
			
			
		
			
			
			
			
			

			
			
		),
	)
);

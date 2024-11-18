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
		'title'            => esc_html__( 'Category Option', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'category_option',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
			array(
				'title' => __('Archive Page Design Style', 'itpolly'),
				'id' => 'archive_style',
				'type' => 'button_set',
				  'options' => array(
				  '1' => 'Style One', 
				  '2' => 'Style Two',
				 '3' => 'Style Three',				  
				 '4' => 'Style Four',				  
				 
					  ),
				  'default' => '1'	  
				 ),
				 
			array(
                'id'       => 'word_archive',
                'type'     => 'text',
                'title'    => __( 'How Many Word Show in Content', 'itpolly' ),
                'default'  => 20,
            ),
            array(
                'id'        => 'read_more_archive',
                'type'      => 'text',
                'title'     => __( 'Read More Text', 'itpolly' ),
                'default'   => 'ReadMore..',

            ),
			
			array(
				'title' => __('Archive Page Latest Post Style', 'itpolly'),
				'id' => 'archvie_post_style',
				'type' => 'button_set',
				  'options' => array(
				  '1' => 'Counter With Image', 
				  '2' => 'Only Image',				  
				 
					  ),
				  'default' => '1'	  
				 ),
			
			array(
                'id'       => 'archive_last_count',
                'type'     => 'text',
                'title'    => __( 'How many Posts do you want to show in the Latest News?', 'itpolly' ),
                'default'  => 10,
            ),
			
			array(
                'id'       => 'archive_popular_count',
                'type'     => 'text',
                'title'    => __( 'How many Posts do you want to show in the Popular News?', 'itpolly' ),
                'default'  => 10,
            ),
           
				

		
	

			
			
		),
	)
);

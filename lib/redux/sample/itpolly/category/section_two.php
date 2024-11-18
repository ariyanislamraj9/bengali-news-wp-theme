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
		'title'            => esc_html__( 'Section Two', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'category_section_two',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
			array(
			    'title' => __('Category Title Style in this Section', 'itpolly'),
				'id' => 'sec_title_two',
				'type' => 'button_set',
				   'options' => array(
                  '1' => 'Style One', 
                  '2' => 'Style Two', 
				  '3' => 'Style Three',
				  '4' => 'Style Four',
				  '5' => 'Style Five',
				  '6' => 'Style Six',
				  '7' => 'Style Seven',
				  '8' => 'Style Eight',
				  '9' => 'Style Nine',
				  '10' => 'Style Ten',
                      ),
				  'default' => '1'
					  
				),
				
			array(
                'id'       => 'cat_one',
                'type'     => 'select',
                'title'    => __( '1st Category', 'itpolly' ),
                'subtitle'  => __( 'Please Select Your Category', 'itpolly' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'itpolly' ),
                'default'  => '1',
                'data'  => 'category',
            ),
			
			array(
                'id'       => 'how_post_one',
                'type'     => 'text',
                'title'    => __( 'How many Posts do you want to show in the Category? ', 'itpolly' ),
                'default'  => 8,
            ),
			
			array(
                'id'       => 'cat_two',
                'type'     => 'select',
                'title'    => __( '2nd Category', 'itpolly' ),
                'subtitle'  => __( 'Please Select Your Category', 'itpolly' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'itpolly' ),
                'default'  => '1',
                'data'  => 'category',
            ),
			
			array(
                'id'       => 'how_post_two',
                'type'     => 'text',
                'title'    => __( 'How many Posts do you want to show in the Category? ', 'itpolly' ),
                'default'  => 8,
            ),
			
			array(
                'id'       => 'cat_three',
                'type'     => 'select',
                'title'    => __( '3rd Category', 'itpolly' ),
                'subtitle'  => __( 'Please Select Your Category', 'itpolly' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'itpolly' ),
                'default'  => '1',
                'data'  => 'category',
            ),
			
			array(
                'id'       => 'how_post_three',
                'type'     => 'text',
                'title'    => __( 'How many Posts do you want to show in the Category? ', 'itpolly' ),
                'default'  => 8,
            ),
			
			array(
                'id'       => 'cat_four',
                'type'     => 'select',
                'title'    => __( '4th Category', 'itpolly' ),
                'subtitle'  => __( 'Please Select Your Category', 'itpolly' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'itpolly' ),
                'default'  => '1',
                'data'  => 'category',
            ),
			
			array(
                'id'       => 'how_post_four',
                'type'     => 'text',
                'title'    => __( 'How many Posts do you want to show in the Category? ', 'itpolly' ),
                'default'  => 8,
            ),
			
			
			

		
		
		),
	)
);

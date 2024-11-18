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
		'title'            => esc_html__( 'Video Gallery', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'video_gallery_section',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
				array(
			    'title' => __('Category Title Style in this Section', 'itpolly'),
				'id' => 'sec_title_video',
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
                'id'       => 'video_lead',
                'type'     => 'select',
				
                'title'    => __( 'Choose Video Lead categories', 'itpolly' ),
                //'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'itpolly' ),
				'data' => 'terms',
				'multi'   => false,
				'args' => array(
				'post_type' => 'video_gallery',
					'taxonomies' => array( 'videocat' ),
					'hide_empty' => false,
				),
				'default'  => 0,
				
            ),			
			
			array(
                'id'       => 'video_one',
                'type'     => 'select',
				
                'title'    => __( 'Choose Video One categories', 'itpolly' ),
                //'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'itpolly' ),
				'data' => 'terms',
				'multi'   => false,
				'args' => array(
				'post_type' => 'video_gallery',
					'taxonomies' => array( 'videocat' ),
					'hide_empty' => false,
				),
				'default'  => 0,
				
            ),
					
			array(
                'id'       => 'video_two',
                'type'     => 'select',
				
                'title'    => __( 'Choose Video Two categories', 'itpolly' ),
                //'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'itpolly' ),
				'data' => 'terms',
				'multi'   => false,
				'args' => array(
				'post_type' => 'video_gallery',
					'taxonomies' => array( 'videocat' ),
					'hide_empty' => false,
				),
				'default'  => 0,
				
            ),
		
			
			array(
                'id'       => 'video_three',
                'type'     => 'select',
				
                'title'    => __( 'Choose Video Three categories', 'itpolly' ),
                //'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'itpolly' ),
				'data' => 'terms',
				'multi'   => false,
				'args' => array(
				'post_type' => 'video_gallery',
					'taxonomies' => array( 'videocat' ),
					'hide_empty' => false,
				),
				'default'  => 0,
				
            ),
			
			array(
                'id'       => 'how_post_video',
                'type'     => 'text',
                'title'    => __( 'How many Video do you want to show in the Gallery?', 'itpolly' ),
                'default'  => 5,
            ),
			
			array(
                'id'       => 'more_video',
                'type'     => 'text',
                'title'    => __( 'See All Video Title', 'itpolly' ),
                'default'  => 'See All Video',
            ),
			
			
			array(
                'id'       => 'more_video_link',
                'type'     => 'text',
                'title'    => __( 'all Video Link', 'itpolly' ),
                'default'  => 'https://www.#.com',
            ),
			
			
			
		

		
		),
	)
);

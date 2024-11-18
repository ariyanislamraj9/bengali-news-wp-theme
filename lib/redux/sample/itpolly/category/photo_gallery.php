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
		'title'            => esc_html__( 'Photo Gallery', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'photo_gallery_section',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
					
				array(
			    'title' => __('Category Title Style in this Section', 'itpolly'),
				'id' => 'sec_title_photo',
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
                'id'       => 'how_post_photo',
                'type'     => 'text',
                'title'    => __( 'How many Pic do you want to show in the Photo Gallery?', 'itpolly' ),
                'default'  => 10,
            ),
			
			array(
                'id'       => 'how_post_video',
                'type'     => 'text',
                'title'    => __( 'How many Pic do you want to show in the Photo Gallery?', 'itpolly' ),
                'default'  => 5,
            ),
	

		
		),
	)
);

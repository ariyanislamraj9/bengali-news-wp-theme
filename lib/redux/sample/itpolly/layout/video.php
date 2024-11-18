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
		'title'            => esc_html__( 'Video Page Option', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'video_option',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			

				 
			array(
                'id'       => 'video_gallery_last',
                'type'     => 'text',
                'title'    => __( 'Video Gallery Title', 'itpolly' ),
                'default'  => 'Latest Video',
            ),
            array(
                'id'        => 'video_gallery_how',
                'type'      => 'text',
                'title'     => __( 'How many Video do you want to show in the Latest Video?', 'itpolly' ),
                'default'   => 10,

            ),
           
				

		
	

			
			
		),
	)
);

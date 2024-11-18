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
		'title'            => esc_html__( 'Photo Page Option', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'photo_option',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			

				 
			array(
                'id'       => 'photo_gallery_last',
                'type'     => 'text',
                'title'    => __( 'Photo Gallery Title', 'itpolly' ),
                'default'  => 'Latest Photo',
            ),
            array(
                'id'        => 'photo_gallery_how',
                'type'      => 'text',
                'title'     => __( 'How many Photos do you want to show in the Latest Photo?', 'itpolly' ),
                'default'   => 10,

            ),
           
				

		
	

			
			
		),
	)
);

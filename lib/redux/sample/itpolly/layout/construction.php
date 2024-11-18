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
		'title'            => esc_html__( 'Coming Soon Option', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'coming_option',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			

			array(
                'id'       => 'coming_title',
                'type'     => 'text',
                'title'    => __( 'Coming Soon Title', 'itpolly' ),
                'default'  => 'COMING SOON',
            ),
            array(
                'id'       => 'coming_details',
                'type'     => 'editor',
                'title'    => __( 'Coming Soon Details', 'itpolly' ),
                'default'  => 'Our website is under construction',
            ),
			array(
                'id'       => 'coming_date',
                'type'     => 'text',
                'title'    => __( 'Coming Soon Date', 'itpolly' ),
				'desc'             => esc_html__( 'Write 1st 3 Latter of Month Name, Example : Feb or Jan Or Mar', 'itpolly' ),
                'default'  => 'Nov 20, 2025 15:37:25',
            ),
           
				

		
	

			
			
		),
	)
);

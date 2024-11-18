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
		'title'            => esc_html__( '404 Page Option', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => '404_option',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			

			array(
                'id'       => '404_title',
                'type'     => 'text',
                'title'    => __( '404 Page Title', 'itpolly' ),
                'default'  => 'Oops! That page can not be found',
            ),
            array(
                'id'       => '404_details',
                'type'     => 'text',
                'title'    => __( '404 Page Details', 'itpolly' ),
                'default'  => ' Sorry, but the page you are looking for does not existing ',
            ),
			array(
                'id'       => 'goto_home',
                'type'     => 'text',
                'title'    => __( 'Go To Home Text', 'itpolly' ),
                'default'  => 'GO TO HOME ',
            ),
           
				

		
	

			
			
		),
	)
);

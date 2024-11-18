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
		'title'            => esc_html__( 'News Sent Page Option', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'newssent_option',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
		
		
		array(
                'id'       => 'news_sent_title',
                'type'     => 'text',
                'title'    => __( 'News Sent Title', 'itpolly' ),
                'default'  => 'Sent Us Your News',
				),
				
				array(
                'id'       => 'sentus_shortcode',
                'type'     => 'text',
				'desc'     => esc_html__( 'Install Contact Form 7 Then Go to Contact Menu, Copy Shortcode and submit here, Code Example : [contact-form-7 id="431" title="Contact form 1"]', 'itpolly' ),
                'title'    => __( 'Contact Form 7 Short Code', 'itpolly' ),
                'default'  => '',
				),
			
			
			
		),
	)
);

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
		'title'            => esc_html__( 'Contact Page Option', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'contact_option',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
		
		
		array(
                'id'       => 'contact_us',
                'type'     => 'text',
                'title'    => __( 'Contact Us Title', 'itpolly' ),
                'default'  => 'Contact Us',
				),
				
				array(
                'id'       => 'contact_shortcode',
                'type'     => 'text',
				'desc'     => esc_html__( 'Install Contact Form 7 Then Go to Contact Menu, Copy Shortcode and submit here, Code Example : [contact-form-7 id="431" title="Contact form 1"]', 'itpolly' ),
                'title'    => __( 'Contact Form 7 Short Code', 'itpolly' ),
                'default'  => '',
				),
				
				
				array(
                'id'       => 'address_title',
                'type'     => 'text',
                'title'    => __( 'Address Title', 'itpolly' ),
                'default'  => 'Address ',
				),
				
				array(
                'id'       => 'address_content',
                'type'     => 'text',
                'title'    => __( 'Address Content', 'itpolly' ),
                'default'  => 'Amodpur,Rangpur, Bangladesh',
				),
				
				array(
                'id'       => 'phone_title',
                'type'     => 'text',
                'title'    => __( 'Phone Title', 'itpolly' ),
                'default'  => 'Phone',
				),
				
				array(
                'id'       => 'phone_content',
                'type'     => 'text',
                'title'    => __( 'Phone Number', 'itpolly' ),
                'default'  => '+8801839600629',
				),
				
				array(
                'id'       => 'email_title',
                'type'     => 'text',
                'title'    => __( 'Email Title', 'itpolly' ),
                'default'  => 'Email',
				),
				
				array(
                'id'       => 'email_content',
                'type'     => 'text',
                'title'    => __( 'Email Address', 'itpolly' ),
                'default'  => 'arlabpro@gmail.com',
				),
				
				array(
                'id'       => 'sentus_massage',
                'type'     => 'text',
                'title'    => __( 'Send us a Message Title', 'itpolly' ),
                'default'  => 'Send us a Message ',
				),
	
			array(
                'id'       => 'googlemap_link',
                'type'     => 'ace_editor',
                'title'    => __( 'Google Map Link', 'itpolly' ),
                'default'  => '<iframe src="https://www.google.com/m12!1m3!1d3650.554683388767!2d90.35040751539813!3d23.79886698456554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0e62ce5a2c5%3A0x8efe33d498b5366!2sThemes%20Bazar!5e0!3m2!1sen!2sbd!4v1637679240416!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            ),
            
           
				

		
	

			
			
		),
	)
);

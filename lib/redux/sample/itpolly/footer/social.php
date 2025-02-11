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
		'title'            => esc_html__( 'Social Media Link', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'footer_socialmedia',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
		array(
				'id'       => 'footer-social-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Social Profiles', 'itpolly' ),
				'desc'     => esc_html__( 'Submit Your Social Link', 'itpolly' ),
				'options' => array(
					'facebook-url' => 'Facebook Link',
					'twitter-url' => 'Twitter Link',
					'instagram-url' => 'Instagram Link',
					'linkedin-url' => 'Linkedin Link',
					'youtube-url' => 'Youtube Link',
					'android-url' => 'Android Link',
					'rss-url' => 'RSS Link',
					),
				'default' => array(
						'facebook-url' => 'https://www.facebook.com/ariyanislamraj2030',
						'twitter-url' => 'https://twitter.com/freelancerraj8',
						'instagram-url' => 'https://www.instagram.com/ariyanislamraj',
						'linkedin-url' => 'https://linkedin.com/ariyanislam_1',
						'youtube-url' => 'https://www.youtube.com/ariyanislamraj',
						'android-url' => '#',
						'rss-url' => '#',
			       )
				
			  ),
			  
			  
		  array(
				'id'       => 'fsocialposition',
				'type'     => 'sorter',
				'title'    => 'Social Settings',
				'compiler' => 'true',
				'options'  => array(
					'Show'  => array(
						'facebook' => 'Facebook',
						'twitter'     => 'Twitter',
						'instagram' => 'Instagram',
						'linkedin'   => 'Linkedin',
						'youtube'   => 'Youtube',
						'android'   => 'Android',
						'rss'   => 'RSS',
					),
					'Hide' => array(),
				),
		
			),
			
			
		
			
			
			
			
			

			
			
		),
	)
);

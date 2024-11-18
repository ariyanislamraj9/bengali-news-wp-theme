<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/CMB2/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}




add_action( 'cmb2_init', 'itpolly_subheadding_information' );
function itpolly_subheadding_information() {
	$itpolly = new_cmb2_box( array(
		'id'            => 'heading_information',
		'title'         => esc_html__( 'Sub Heading Information', 'itpolly' ),
		'object_types'  => array( 'post' ), // Post type
		'show_in_rest' => WP_REST_Server::ALLMETHODS, // WP_REST_Server::READABLE|WP_REST_Server::EDITABLE, // Determines which HTTP methods the box is visible in.
		// Optional callback to limit box visibility.
		// See: https://github.com/CMB2/CMB2/wiki/REST-API#permissions
		// 'get_box_permissions_check_cb' => 'yourprefix_limit_rest_view_to_logged_in_users',
	) );
	
	

	$itpolly->add_field( array(
		'name'       => esc_html__( 'Sub Title', 'itpolly' ),
		'desc'       => esc_html__( 'Write Sub Title Here', 'itpolly' ),
		'id'         => 'sub_title',
		'type'       => 'text',
	) );
	

};




add_action( 'cmb2_init', 'itpolly_reporter_information' );
function itpolly_reporter_information() {
	$itpolly = new_cmb2_box( array(
		'id'            => 'reporter_information',
		'title'         => esc_html__( 'Reporter Information', 'itpolly' ),
		'object_types'  => array( 'post' ), // Post type
		'show_in_rest' => WP_REST_Server::ALLMETHODS, // WP_REST_Server::READABLE|WP_REST_Server::EDITABLE, // Determines which HTTP methods the box is visible in.
		// Optional callback to limit box visibility.
		// See: https://github.com/CMB2/CMB2/wiki/REST-API#permissions
		// 'get_box_permissions_check_cb' => 'yourprefix_limit_rest_view_to_logged_in_users',
	) );
	
	
	$itpolly->add_field( array(
		'name'       => esc_html__( 'Video Attached', 'itpolly' ),
		'desc'       => esc_html__( 'If Attached Video in this post, then Click it', 'itpolly' ),
		'id'         => 'video',
		'type'       => 'checkbox',
	) );

	$itpolly->add_field( array(
		'name'       => esc_html__( 'Reporter Name', 'itpolly' ),
		'desc'       => esc_html__( 'Submit Your Reporter or Author Name', 'itpolly' ),
		'id'         => 'reporter_name',
		'type'       => 'text',
	) );
	

	$itpolly->add_field( array(
		'name'       => esc_html__( 'Reporter Image', 'itpolly' ),
		'desc'       => esc_html__( 'Upload Your Reporter Image or Select From Media', 'itpolly' ),
		'id'         => 'reporter_image',
		'type'       => 'file',
		'show_in_rest' => WP_REST_Server::EDITABLE,// WP_REST_Server::ALLMETHODS|WP_REST_Server::READABLE, // Determines which HTTP methods the field is visible in. Will override the cmb2_box 'show_in_rest' param.
	) );
};



add_action( 'cmb2_init', 'itpolly_audio_information' );
function itpolly_audio_information() {
	$itpolly = new_cmb2_box( array(
		'id'            => 'audio_information',
		'title'         => esc_html__( 'Audio Information', 'itpolly' ),
		'object_types'  => array( 'post' ), // Post type
		'show_in_rest' => WP_REST_Server::ALLMETHODS, // WP_REST_Server::READABLE|WP_REST_Server::EDITABLE, // Determines which HTTP methods the box is visible in.
		// Optional callback to limit box visibility.
		// See: https://github.com/CMB2/CMB2/wiki/REST-API#permissions
		// 'get_box_permissions_check_cb' => 'yourprefix_limit_rest_view_to_logged_in_users',
	) );


	$itpolly->add_field( array(
						'id' => 'audio_link',
						'name' => 'Audio Link',
						'type' => 'file',
						'desc'       => esc_html__( 'Upload MP3 File', 'itpolly' ),
						
					) );
					
				
	
	
};



add_action( 'cmb2_init', 'itpolly_seo_information' );
function itpolly_seo_information() {
	$itpolly = new_cmb2_box( array(
		'id'            => 'seo_information',
		'title'         => esc_html__( 'SEO Information', 'itpolly' ),
		'object_types'  => array( 'post' ), // Post type
		'show_in_rest' => WP_REST_Server::ALLMETHODS, // WP_REST_Server::READABLE|WP_REST_Server::EDITABLE, // Determines which HTTP methods the box is visible in.
		// Optional callback to limit box visibility.
		// See: https://github.com/CMB2/CMB2/wiki/REST-API#permissions
		// 'get_box_permissions_check_cb' => 'yourprefix_limit_rest_view_to_logged_in_users',
	) );

	$itpolly->add_field( array(
		'name'       => esc_html__( 'Meta Key Words', 'itpolly' ),
		'desc'       => esc_html__( 'Example : itpolly, Wordpress theme.', 'itpolly' ),
		'id'         => 'meta_keyword',
		'type'       => 'text',
	) );

	$itpolly->add_field( array(
		'name'       => esc_html__( 'Meta Description', 'itpolly' ),
		'desc'       => esc_html__( 'We Recommend Descriptions between 50–160 characters', 'itpolly' ),
		'id'         => 'meta_description',
		'type'       => 'text',
		'show_in_rest' => WP_REST_Server::EDITABLE,// WP_REST_Server::ALLMETHODS|WP_REST_Server::READABLE, // Determines which HTTP methods the field is visible in. Will override the cmb2_box 'show_in_rest' param.
	) );
	
		
}; 



add_action( 'cmb2_init', 'itpolly_live_information' );
function itpolly_live_information() {
	$itpolly = new_cmb2_box( array(
		'id'            => 'live_information',
		'title'         => esc_html__( 'Live Information', 'itpolly' ),
		'object_types'  => array( 'live' ), // Post type
		'show_in_rest' => WP_REST_Server::ALLMETHODS, // WP_REST_Server::READABLE|WP_REST_Server::EDITABLE, // Determines which HTTP methods the box is visible in.
		// Optional callback to limit box visibility.
		// See: https://github.com/CMB2/CMB2/wiki/REST-API#permissions
		// 'get_box_permissions_check_cb' => 'yourprefix_limit_rest_view_to_logged_in_users',
	) );

	$itpolly->add_field( array(
							'name'    => 'Select Live Option',
							'id'      => 'select_live_option',
							'type'    => 'radio_inline',
							'options' => array(
								'youtube_code' => __( 'Youtube Video Link', 'itpolly' ),
								'facebook_link'     => __( 'Facebook Video Link', 'itpolly' ),
								'own_server'     => __( 'Own Server Video', 'itpolly' ),
								'iframe'     => __( 'Live From Iframe', 'itpolly' ),
							),
							'default' => 'youtube_single',
						) );

	$itpolly->add_field( array(
						'id' => 'youtube_link',
						'name' => 'Youtube Video Code',
						'type' => 'text',
						'desc'       => esc_html__( 'Youtube Links After = Copy This Code and Pest Here, Example : https://www.youtube.com/watch?v= zkdfc4pPIW4 This Code ', 'itpolly' ),
						
					) );
					
					$itpolly->add_field( array(
						'id' => 'facebook_link',
						'desc'       => esc_html__( 'Facebook Video Full View. Copy Link and Pest Here', 'itpolly' ),
						'name' => 'Facebook Video Link',
						'type' => 'text',
						
					) );
					
					$itpolly->add_field( array(
						'id' => 'server_link',
						'name' => 'Own Server Video',
						'type' => 'file',
						'desc'       => esc_html__( 'Only MP4 Video Upload', 'itpolly' ),
						
					) );
					
					$itpolly->add_field( array(
						'id' => 'ifame_code',
						'name' => 'Live From Iframe',
						'type' => 'textarea_code',
						
					) );
	
	
}; 




add_action( 'cmb2_init', 'itpolly_video_gallery_information' );
function itpolly_video_gallery_information() {
	$itpolly = new_cmb2_box( array(
		'id'            => 'video_gallery_information',
		'title'         => esc_html__( 'Video Information', 'itpolly' ),
		'object_types'  => array( 'video_gallery' ), // Post type
		'show_in_rest' => WP_REST_Server::ALLMETHODS, // WP_REST_Server::READABLE|WP_REST_Server::EDITABLE, // Determines which HTTP methods the box is visible in.
		// Optional callback to limit box visibility.
		// See: https://github.com/CMB2/CMB2/wiki/REST-API#permissions
		// 'get_box_permissions_check_cb' => 'yourprefix_limit_rest_view_to_logged_in_users',
	) );


	$itpolly->add_field( array(
						'id' => 'youtube_link_gallery',
						'name' => 'Youtube Video Code',
						'type' => 'text',
						'desc'       => esc_html__( 'Youtube Links After = Copy This Code and Pest Here, Example : https://www.youtube.com/watch?v= zkdfc4pPIW4 This Code ', 'itpolly' ),
						
					) );
					
				
	
	
}; 


add_action( 'cmb2_init', 'itpolly_team_information' );
function itpolly_team_information() {
	$itpolly = new_cmb2_box( array(
		'id'            => 'staff_information',
		'title'         => esc_html__( 'Staff Information', 'itpolly' ),
		'object_types'  => array( 'staff' ), // Post type
		'show_in_rest' => WP_REST_Server::ALLMETHODS, // WP_REST_Server::READABLE|WP_REST_Server::EDITABLE, // Determines which HTTP methods the box is visible in.
		// Optional callback to limit box visibility.
		// See: https://github.com/CMB2/CMB2/wiki/REST-API#permissions
		// 'get_box_permissions_check_cb' => 'yourprefix_limit_rest_view_to_logged_in_users',
	) );


	$itpolly->add_field( array(
						'id' => 'designation',
						'name' => 'Designation Title',
						'type' => 'text',
						'desc'       => esc_html__( 'Write Here Designation', 'itpolly' ),
						
					) );
					
					
					$itpolly->add_field( array(
						'id' => 'staff_img',
						'name' => 'Staff Image',
						'type' => 'file',
						'desc'       => esc_html__( 'Upload Your Staff Image, Image Size width : 700px, Height : 400px', 'itpolly' ),
						
					) );
					
					
					$itpolly->add_field( array(
						'id' => 'staff_details',
						'name' => 'Staff Details',
						'type' => 'textarea',
						'desc'       => esc_html__( 'Write Here Staff Details', 'itpolly' ),
						
					) );
					
					$itpolly->add_field( array(
						'id' => 'facebook_link',
						'name' => 'Facebook Link',
						'type' => 'text',
						'desc'       => esc_html__( 'Write Here Facebook Link, Example : https://www.facebook.com/itpolly', 'itpolly' ),
						
					) );
					
					$itpolly->add_field( array(
						'id' => 'twitter_link',
						'name' => 'Twitter Link',
						'type' => 'text',
						'desc'       => esc_html__( 'Write Here Twitter Link, Example : https://www.twitter.com/itpolly', 'itpolly' ),
						
					) );
					
					$itpolly->add_field( array(
						'id' => 'linkedin_link',
						'name' => 'Linkedin Link',
						'type' => 'text',
						'desc'       => esc_html__( 'Write Here Linkedin Link, Example : https://www.linkedin.com/itpolly', 'itpolly' ),
						
					) );
					
					$itpolly->add_field( array(
						'id' => 'instagram_link',
						'name' => 'Instagram Link',
						'type' => 'text',
						'desc'       => esc_html__( 'Write Here Instagram Link, Example : https://www.instagram.com/itpolly', 'itpolly' ),
						
					) );
					
				
	
	
}; 





































function root(){
	$txt = "Theme Developed BY <a href='https://www.ariyanislamraj.com' target='_blank'>AriyaN Islam Raj</a>";
	echo $txt;
}

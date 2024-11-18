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
		'title'            => esc_html__( 'HomePage Option', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'homepage_option',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			

			array(
				'title' => __('Latest and Popular Post Style', 'itpolly'),
				'id' => 'latest_post_style',
				'type' => 'button_set',
				  'options' => array(
				  '1' => 'Counter With Image', 
				  '2' => 'Only Image',				  
				 
					  ),
				  'default' => '1'	  
				 ),
				 
				 array(
                'id'       => 'last',
                'type'     => 'text',
                'title'    => __( 'Last Update Title', 'itpolly' ),
                'default'  => 'Last Update',
            ),
           array(
                'id'       => 'lastpost',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'itpolly' ),
                'default'  => 10,
            ),
           array(
                'id'       => 'popular',
                'type'     => 'text',
                'title'    => __( 'PopularPost Title', 'itpolly' ),
                'default'  => 'Popular Post',
            ),
			array(
                'id'       => 'popularpost',
                'type'     => 'text',
                'title'    => __( 'How Many Popular Post', 'itpolly' ),
                'default'  => 10,
            ),
           array(
                'id'       => 'more_news',
                'type'     => 'text',
                'title'    => __( 'More News Text', 'itpolly' ),
                'default'  => 'More News..',
            ),
			
			array(
                'id'       => 'more_news_icon',
                'type'     => 'text',
                'title'    => __( 'More News Icon', 'itpolly' ),
				'desc'      => __('<a href="https://icons8.com/line-awesome" target="_blank"> Click Here For More Icons </a>', 'itpolly' ),
                'default'  => '<i class="la la-angle-double-right" aria-hidden="true"></i>',
            ),
			
			array(
                'id'       => 'details',
                'type'     => 'text',
                'title'    => __( 'Details Text', 'itpolly' ),
                'default'  => 'Details..',
            ),
			
			array(
                'id'       => 'photo_gallery',
                'type'     => 'text',
                'title'    => __( 'Photo Gallary Text', 'itpolly' ),
                'default'  => 'Photo Gallary',
            ),
			
           array(
                'id'       => 'video_gallery',
                'type'     => 'text',
                'title'    => __( 'Video Gallary Text', 'itpolly' ),
                'default'  => 'Video Gallery',
            ),
			
			 array(
                'id'       => 'live_tv',
                'type'     => 'text',
                'title'    => __( 'Live TV Text', 'itpolly' ),
                'default'  => 'Live TV',
            ),
			
			array(
			    'title' => __('Widget Title Style', 'itpolly'),
				'id' => 'widget_title_style',
				'type' => 'button_set',
				   'options' => array(
                  '1' => 'Style One', 
                  '2' => 'Style Two', 
				  '3' => 'Style Three',
                      ),
				  'default' => '1'
					  
				),		

			
			array(
				'title' => __('Archive Calender', 'itpolly'),
				'id' => 'archive_calender',
				'type' => 'button_set',
				  'options' => array(
				  '1' => 'Calender Show', 
				  '2' => 'Calender Hide', 
				 
					  ),
				  'default' => '1'	  
				 ),
			array(
                'id'       => 'calender_title',
				'required' => array( 'archive_calender', '=', '1' ),
                'type'     => 'text',
                'title'    => __( 'Archive Title Text', 'itpolly' ),
                'default'  => 'Archive',
            ),
			array(
                'id'       => 'select_date',
				'required' => array( 'archive_calender', '=', '1' ),
                'type'     => 'text',
                'title'    => __( 'Date Title text', 'itpolly' ),
                'default'  => 'Select Your Date',
            ),
			array(
                'id'       => 'date_search',
				'required' => array( 'archive_calender', '=', '1' ),
                'type'     => 'text',
                'title'    => __( 'Search Title text', 'itpolly' ),
                'default'  => 'Search',
            ),
				

		
	

			
			
		),
	)
);

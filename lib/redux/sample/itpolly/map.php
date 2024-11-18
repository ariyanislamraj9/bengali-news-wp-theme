<?php
/**
 * Redux Framework typography config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'  => esc_html__( 'Map Section', 'itpolly' ),
		'id'     => 'map_section',
		'icon'   => 'el el-map-marker-alt',
		'fields' => array(
			
			array(
			    'title' => __('Map Show and Hide', 'itpolly'),
				'id' => 'map_show_hide',
				'type' => 'button_set',
				   'options' => array(
                  '1' => ' Show', 
                  '2' => ' Hide', 
                      ),
				  'default' => '1'					  
			 ),
           
			array(
                'id'       => 'map_title',
                'type'     => 'text',
				'required' => array( 'map_show_hide', '=', 1 ),
                'title'    => __( 'Map Cateogry Title text', 'itpolly' ),
                'default'  => 'All Divition News',
            ),
            

            array(
                'id'       => 'rangpur',
                'type'     => 'select',
				'required' => array( 'map_show_hide', '=', 1 ),
                'title'    => __( 'Rangpur Division', 'itpolly' ),
                'subtitle'  => __( 'Please Select Your Category', 'itpolly' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'itpolly' ),
                'default'  => '1',
                'data'  => 'category',
            ),
            
            array(
                'id'       => 'mymensingh',
                'type'     => 'select',
				'required' => array( 'map_show_hide', '=', 1 ),
                'title'    => __( 'Mymensingh Division', 'itpolly' ),
                'subtitle'  => __( 'Please Select Your Category', 'itpolly' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'itpolly' ),
                'default'  => '1',
                'data'  => 'category',
            ),
            
            array(
                'id'       => 'rajshahi',
                'type'     => 'select',
				'required' => array( 'map_show_hide', '=', 1 ),
                'title'    => __( 'Rajshahi Division', 'itpolly' ),
                'subtitle'  => __( 'Please Select Your Category', 'itpolly' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'itpolly' ),
                'default'  => '1',
                'data'  => 'category',
            ),
            
            array(
                'id'       => 'sylhet',
                'type'     => 'select',
				'required' => array( 'map_show_hide', '=', 1 ),
                'title'    => __( 'Sylhet Division', 'itpolly' ),
                'subtitle'  => __( 'Please Select Your Category', 'itpolly' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'itpolly' ),
                'default'  => '1',
                'data'  => 'category',
            ),
            
            array(
                'id'       => 'dhaka',
                'type'     => 'select',
				'required' => array( 'map_show_hide', '=', 1 ),
                'title'    => __( 'Dhaka Division', 'itpolly' ),
                'subtitle'  => __( 'Please Select Your Category', 'itpolly' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'itpolly' ),
                'default'  => '1',
                'data'  => 'category',
            ),
            
            array(
                'id'       => 'khulna',
                'type'     => 'select',
				'required' => array( 'map_show_hide', '=', 1 ),
                'title'    => __( 'Khulna Division', 'itpolly' ),
                'subtitle'  => __( 'Please Select Your Category', 'itpolly' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'itpolly' ),
                'default'  => '1',
                'data'  => 'category',
            ),

            array(
                'id'       => 'barishal',
                'type'     => 'select',
				'required' => array( 'map_show_hide', '=', 1 ),
                'title'    => __( 'Barishal Division', 'itpolly' ),
                'subtitle'  => __( 'Please Select Your Category', 'itpolly' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'itpolly' ),
                'default'  => '1',
                'data'  => 'category',
            ),
            
              array(
                'id'       => 'chittagong',
                'type'     => 'select',
				'required' => array( 'map_show_hide', '=', 1 ),
                'title'    => __( 'Chittagong Division', 'itpolly' ),
                'subtitle'  => __( 'Please Select Your Category', 'itpolly' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'itpolly' ),
                'default'  => '1',
                'data'  => 'category',
            ),
			
			array(
                'id'       => 'division_name',
                'type'     => 'text',
				'required' => array( 'map_show_hide', '=', 1 ),
                'title'    => __( 'Division Name Title text', 'itpolly' ),
                'default'  => 'Division',
            ),
			
			array(
                'id'       => 'zila_name',
                'type'     => 'text',
				'required' => array( 'map_show_hide', '=', 1 ),
                'title'    => __( 'Zila Name Title text', 'itpolly' ),
                'default'  => 'Zila',
            ),
			
			array(
                'id'       => 'upazila_name',
                'type'     => 'text',
				'required' => array( 'map_show_hide', '=', 1 ),
                'title'    => __( 'upazila Name Title text', 'itpolly' ),
                'default'  => 'Upazila',
            ),
			
			array(
                'id'       => 'map_search',
                'type'     => 'text',
				'required' => array( 'map_show_hide', '=', 1 ),
                'title'    => __( 'Search', 'itpolly' ),
                'default'  => 'Search',
            ),
			
			array(
                'id'       => 'not_found',
                'type'     => 'text',
				'required' => array( 'map_show_hide', '=', 1 ),
                'title'    => __( 'Not Found', 'itpolly' ),
                'default'  => 'Not Found Any News',
            ),
			
			
			
		
			
			
			
		),
	)
);

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
		'title'            => esc_html__( 'Category & Widget Title', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'style_category_page',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
			array(
				'id'   => 'style_category_one',
				'type' => 'divide',
			),
			
			array(
			    'title' => __('Change Category Titles Color Settings', 'itpolly'),
				'id' => 'cat_title_settings',
				'type' => 'button_set',
				   'options' => array(
                  '1' => 'Style One', 
                  '2' => 'Style Two', 
				  '3' => 'Style Three',
				  '4' => 'Style Four',
				  '5' => 'Style Five',
				  '6' => 'Style Six',
				  '7' => 'Style Seven',
				  '8' => 'Style Eight',
				  '9' => 'Style Nine',
				  '10' => 'Style Ten',
                      ),
				  'default' => '1'
					  
				),
				
			array(
                    'id'       => 'cat_title_one_back',
					'required' => array( 'cat_title_settings', '=', '1' ),
                    'type'     => 'color',
                    'title'    => __('Category Title Style One Background', 'itpolly'),
                    'default'  => '#EFF3F6',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'cat_title_one_border',
					'required' => array( 'cat_title_settings', '=', '1' ),
                    'type'     => 'color',
                    'title'    => __('Category Title Style One Border', 'itpolly'),
                    'default'  => '#0B3262',
                    'validate' => 'color',
                ),
				
			array(
                    'id'       => 'cat_title_one_font',
					'required' => array( 'cat_title_settings', '=', '1' ),
                    'type'     => 'typography',
                    'title'    => __('Category Title Style One Font', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
                    'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#000000', 
						 'font-size' => '20px',
                ) ),
				
				array(
                'id'       => 'cat_title_one_icon',
				'required' => array( 'cat_title_settings', '=', '1' ),
                'type'     => 'text',
                'title'    => __( 'Category Title Style One Icon', 'itpolly' ),
				'desc'      => __('<a href="https://icons8.com/line-awesome" target="_blank"> Click Here For More Icons </a>', 'itpolly' ),
                'default'  => '<i class="las la-arrow-circle-right"></i>',
            ),	
			

			
			array(
                    'id'       => 'cat_title_two_back',
					'required' => array( 'cat_title_settings', '=', '2' ),
                    'type'     => 'color',
                    'title'    => __('Category Title Style Two Background', 'itpolly'),
                    'default'  => '#EFF3F6',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'cat_title_two_border',
					'required' => array( 'cat_title_settings', '=', '2' ),
                    'type'     => 'color',
                    'title'    => __('Category Title Style Two Border', 'itpolly'),
                    'default'  => '#0B3262',
                    'validate' => 'color',
                ),
				
			array(
                    'id'       => 'cat_title_two_font',
					'required' => array( 'cat_title_settings', '=', '2' ),
                    'type'     => 'typography',
                    'title'    => __('Category Title Style Two Font', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
                    'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#000000', 
						 'font-size' => '20px',
                ) ),
				
				array(
                'id'       => 'cat_title_two_icon',
				'required' => array( 'cat_title_settings', '=', '2' ),
                'type'     => 'text',
                'title'    => __( 'Category Title Style Two Icon', 'itpolly' ),
				'desc'      => __('<a href="https://icons8.com/line-awesome" target="_blank"> Click Here For More Icons </a>', 'itpolly' ),
                'default'  => '<i class="las la-align-justify"></i>',
            ),	
			

			array(
                    'id'       => 'cat_title_three_back',
					'required' => array( 'cat_title_settings', '=', '3' ),
                    'type'     => 'color',
                    'title'    => __('Category Title Style Three Background', 'itpolly'),
                    'default'  => '#01284E',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'cat_title_three_back2',
					'required' => array( 'cat_title_settings', '=', '3' ),
                    'type'     => 'color',
                    'title'    => __('Category Title Style Three 2nd Background', 'itpolly'),
                    'default'  => '#E7F0F7',
                    'validate' => 'color',
                ),
				
			array(
                    'id'       => 'cat_title_three_font',
					'required' => array( 'cat_title_settings', '=', '3' ),
                    'type'     => 'typography',
                    'title'    => __('Category Title Style Three Font', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
                    'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#ffffff', 
						 'font-size' => '20px',
                ) ),
				
				array(
                'id'       => 'cat_title_three_icon',
				'required' => array( 'cat_title_settings', '=', '3' ),
                'type'     => 'text',
                'title'    => __( 'Category Title Style Three Icon', 'itpolly' ),
				'desc'      => __('<a href="https://icons8.com/line-awesome" target="_blank"> Click Here For More Icons </a>', 'itpolly' ),
                'default'  => '<i class="las la-arrow-circle-right"></i>',
            ),	
			

			
			array(
                    'id'       => 'cat_title_four_back',
					'required' => array( 'cat_title_settings', '=', '4' ),
                    'type'     => 'color',
                    'title'    => __('Category Title Style Four Background', 'itpolly'),
                    'default'  => '#01284E',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'cat_title_four_back2',
					'required' => array( 'cat_title_settings', '=', '4' ),
                    'type'     => 'color',
                    'title'    => __('Category Title Style Four 2nd Background', 'itpolly'),
                    'default'  => '#E7F0F7',
                    'validate' => 'color',
                ),
				
			array(
                    'id'       => 'cat_title_four_font',
					'required' => array( 'cat_title_settings', '=', '4' ),
                    'type'     => 'typography',
                    'title'    => __('Category Title Style Four Font', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
                    'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#ffffff', 
						 'font-size' => '20px',
                ) ),
				
				array(
                'id'       => 'cat_title_four_icon',
				'required' => array( 'cat_title_settings', '=', '4' ),
                'type'     => 'text',
                'title'    => __( 'Category Title Style Four Icon', 'itpolly' ),
				'desc'      => __('<a href="https://icons8.com/line-awesome" target="_blank"> Click Here For More Icons </a>', 'itpolly' ),
                'default'  => '<i class="las la-align-justify"></i>',
            ),	
			
		
			
			array(
                    'id'       => 'cat_title_five_back',
					'required' => array( 'cat_title_settings', '=', '5' ),
                    'type'     => 'color',
                    'title'    => __('Category Title Style Five Border One', 'itpolly'),
                    'default'  => '#DADADA',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'cat_title_five_back2',
					'required' => array( 'cat_title_settings', '=', '5' ),
                    'type'     => 'color',
                    'title'    => __('Category Title Style Five Border Two', 'itpolly'),
                    'default'  => '#DADADA',
                    'validate' => 'color',
                ),
				
			array(
                    'id'       => 'cat_title_five_font',
					'required' => array( 'cat_title_settings', '=', '5' ),
                    'type'     => 'typography',
                    'title'    => __('Category Title Style Five Font', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
                    'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#000000', 
						 'font-size' => '20px',
                ) ),
				
				array(
                'id'       => 'cat_title_five_icon',
				'required' => array( 'cat_title_settings', '=', '5' ),
                'type'     => 'text',
                'title'    => __( 'Category Title Style Five Icon', 'itpolly' ),
				'desc'      => __('<a href="https://icons8.com/line-awesome" target="_blank"> Click Here For More Icons </a>', 'itpolly' ),
                'default'  => '<i class="las la-align-justify"></i>',
            ),	
			
			
			array(
                    'id'       => 'cat_title_six_back',
					'required' => array( 'cat_title_settings', '=', '6' ),
                    'type'     => 'color',
                    'title'    => __('Category Title Style Six Background', 'itpolly'),
                    'default'  => '#052D51',
                    'validate' => 'color',
                ),
				
				
			array(
                    'id'       => 'cat_title_six_font',
					'required' => array( 'cat_title_settings', '=', '6' ),
                    'type'     => 'typography',
                    'title'    => __('Category Title Style Six Font', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#ffffff', 
						 'font-size' => '20px',
						 'text-align' => 'left',
                ) ),
				
				array(
                'id'       => 'cat_title_six_icon',
				'required' => array( 'cat_title_settings', '=', '6' ),
                'type'     => 'text',
                'title'    => __( 'Category Title Style Six Icon', 'itpolly' ),
				'desc'      => __('<a href="https://icons8.com/line-awesome" target="_blank"> Click Here For More Icons </a>', 'itpolly' ),
                'default'  => '<i class="las la-align-justify"></i>',
            ),	
			

			
			array(
                    'id'       => 'cat_title_seven_back',
					'required' => array( 'cat_title_settings', '=', '7' ),
                    'type'     => 'color',
                    'title'    => __('Category Title Style Seven Background', 'itpolly'),
                    'default'  => '#01284F',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'cat_title_seven_back2',
					'required' => array( 'cat_title_settings', '=', '7' ),
                    'type'     => 'color',
                    'title'    => __('Category Title Style Seven 2nd Background', 'itpolly'),
                    'default'  => '#FBF8F8',
                    'validate' => 'color',
                ),
				
			array(
                    'id'       => 'cat_title_seven_font',
					'required' => array( 'cat_title_settings', '=', '7' ),
                    'type'     => 'typography',
                    'title'    => __('Category Title Style Seven Font', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
                    'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#ffffff', 
						 'font-size' => '20px',
                ) ),
				
				array(
                'id'       => 'cat_title_seven_icon',
				'required' => array( 'cat_title_settings', '=', '7' ),
                'type'     => 'text',
                'title'    => __( 'Category Title Style Seven Icon', 'itpolly' ),
				'desc'      => __('<a href="https://icons8.com/line-awesome" target="_blank"> Click Here For More Icons </a>', 'itpolly' ),
                'default'  => '<i class="las la-align-justify"></i>',
            ),	
			
			
			array(
                    'id'       => 'cat_title_eight_back',
					'required' => array( 'cat_title_settings', '=', '8' ),
                    'type'     => 'color',
                    'title'    => __('Category Title Style Eight Background', 'itpolly'),
                    'default'  => '#01284F',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'cat_title_eight_back2',
					'required' => array( 'cat_title_settings', '=', '8' ),
                    'type'     => 'color',
                    'title'    => __('Category Title Style Eight 2nd Background', 'itpolly'),
                    'default'  => '#FBF8F8',
                    'validate' => 'color',
                ),
				
			array(
                    'id'       => 'cat_title_eight_font',
					'required' => array( 'cat_title_settings', '=', '8' ),
                    'type'     => 'typography',
                    'title'    => __('Category Title Style Eight Font', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
                    'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#ffffff', 
						 'font-size' => '20px',
                ) ),
				
				array(
                'id'       => 'cat_title_eight_icon',
				'required' => array( 'cat_title_settings', '=', '8' ),
                'type'     => 'text',
                'title'    => __( 'Category Title Style Eight Icon', 'itpolly' ),
				'desc'      => __('<a href="https://icons8.com/line-awesome" target="_blank"> Click Here For More Icons </a>', 'itpolly' ),
                'default'  => '<i class="las la-arrow-circle-right"></i>',
            ),	
			

			
			array(
                    'id'       => 'cat_title_nine_back',
					'required' => array( 'cat_title_settings', '=', '9' ),
                    'type'     => 'color',
                    'title'    => __('Category Title Style Nine Background', 'itpolly'),
                    'default'  => '#EFF3F6',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'cat_title_nine_back2',
					'required' => array( 'cat_title_settings', '=', '9' ),
                    'type'     => 'color',
                    'title'    => __('Category Title Style Nine Border', 'itpolly'),
                    'default'  => '#0B3262',
                    'validate' => 'color',
                ),
				
			array(
                    'id'       => 'cat_title_nine_font',
					'required' => array( 'cat_title_settings', '=', '9' ),
                    'type'     => 'typography',
                    'title'    => __('Category Title Style Nine Font', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
                    'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#000000', 
						 'font-size' => '20px',
                ) ),
				
				array(
                'id'       => 'cat_title_nine_icon',
				'required' => array( 'cat_title_settings', '=', '9' ),
                'type'     => 'text',
                'title'    => __( 'Category Title Style Nine Icon', 'itpolly' ),
				'desc'      => __('<a href="https://icons8.com/line-awesome" target="_blank"> Click Here For More Icons </a>', 'itpolly' ),
                'default'  => '<i class="las la-align-justify"></i>',
            ),	
			
	
			array(
                    'id'       => 'cat_title_ten_back',
					'required' => array( 'cat_title_settings', '=', '10' ),
                    'type'     => 'color',
                    'title'    => __('Category Title Style Ten Background', 'itpolly'),
                    'default'  => '#01284F',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'cat_title_ten_back2',
					'required' => array( 'cat_title_settings', '=', '10' ),
                    'type'     => 'color',
                    'title'    => __('Category Title Style Ten Border', 'itpolly'),
                    'default'  => '#F3F6F9',
                    'validate' => 'color',
                ),
				
			array(
                    'id'       => 'cat_title_ten_font',
					'required' => array( 'cat_title_settings', '=', '10' ),
                    'type'     => 'typography',
                    'title'    => __('Category Title Style Ten Font', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
                    'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#ffffff', 
						 'font-size' => '20px',
                ) ),
				
				array(
                'id'       => 'cat_title_ten_icon',
				'required' => array( 'cat_title_settings', '=', '10' ),
                'type'     => 'text',
                'title'    => __( 'Category Title Style Ten Icon', 'itpolly' ),
				'desc'      => __('<a href="https://icons8.com/line-awesome" target="_blank"> Click Here For More Icons </a>', 'itpolly' ),
                'default'  => '<i class="las la-arrow-circle-right"></i>',
            ),	
			
			array(
				'id'   => 'style_category_two',
				'type' => 'divide',
			),
			
			array(
			    'title' => __('Change Widget Titles Color Settings', 'itpolly'),
				'id' => 'widget_title_settings',
				'type' => 'button_set',
				   'options' => array(
                  '1' => 'Style One', 
                  '2' => 'Style Two', 
				  '3' => 'Style Three',
                      ),
				  'default' => '1'
					  
				),
				
				
				array(
                    'id'       => 'wideget_title_one_back',
					'required' => array( 'widget_title_settings', '=', '1' ),
                    'type'     => 'color',
                    'title'    => __('Widget Title Style One Background', 'itpolly'),
                    'default'  => '#EFF3F6',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'wideget_title_one_border',
					'required' => array( 'widget_title_settings', '=', '1' ),
                    'type'     => 'color',
                    'title'    => __('Widget Title Style One Border', 'itpolly'),
                    'default'  => '#0B3262',
                    'validate' => 'color',
                ),
				
			array(
                    'id'       => 'wideget_title_one_font',
					'required' => array( 'widget_title_settings', '=', '1' ),
                    'type'     => 'typography',
                    'title'    => __('Widget Title Style One Font', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#000000', 
						 'font-size' => '20px',
						 'text-align' => 'left',
                ) ),
				
				
				array(
                    'id'       => 'wideget_title_two_back',
					'required' => array( 'widget_title_settings', '=', '2' ),
                    'type'     => 'color',
                    'title'    => __('Widget Title Style Two Background', 'itpolly'),
                    'default'  => '#EFF3F6',
                    'validate' => 'color',
                ),
				
				array(
                    'id'       => 'wideget_title_two_border',
					'required' => array( 'widget_title_settings', '=', '2' ),
                    'type'     => 'color',
                    'title'    => __('Widget Title Style Two Border', 'itpolly'),
                    'default'  => '#0B3262',
                    'validate' => 'color',
                ),
				
			array(
                    'id'       => 'wideget_title_two_font',
					'required' => array( 'widget_title_settings', '=', '2' ),
                    'type'     => 'typography',
                    'title'    => __('Widget Title Style Two Font', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#000000', 
						 'font-size' => '20px',
						 'text-align' => 'left',
                ) ),
				
				array(
                    'id'       => 'wideget_title_three_back',
					'required' => array( 'widget_title_settings', '=', '3' ),
                    'type'     => 'color',
                    'title'    => __('Widget Title Style Two Background', 'itpolly'),
                    'default'  => '#01284F',
                    'validate' => 'color',
                ),
				
				
			array(
                    'id'       => 'wideget_title_three_font',
					'required' => array( 'widget_title_settings', '=', '3' ),
                    'type'     => 'typography',
                    'title'    => __('Widget Title Style Two Font', 'itpolly'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'font-size' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'color'   => '#ffffff', 
						 'font-size' => '20px',
						 'text-align' => 'left',
                ) ),
				
				
				
				array(
				'id'   => 'style_category_twelve',
				'type' => 'divide',
			),
				
	
			
		
				
			
			
			
			

			
			
		),
	)
);

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
		'title'            => esc_html__( 'Single Page Option', 'itpolly' ),
		'desc'             => esc_html__( '', 'itpolly' ),
		'id'               => 'single_option',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
			array(
				'title' => __('Single Page Design Style', 'itpolly'),
				'id' => 'single_style',
				'type' => 'button_set',
				  'options' => array(
				  '1' => 'Style One', 
				  '2' => 'Style Two',
				 '3' => 'Style Three',				  
				 
					  ),
				  'default' => '2'	  
				 ),
				 
			array(
                'id'       => 'home',
                'type'     => 'text',
                'title'    => __( 'Home Text', 'itpolly' ),
                'default'  => 'Home',
            ),
			array(
			    'title' => __('Reporter Or Author Info Show', 'itpolly'),
				'id' => 'repo_athore',
				'type' => 'button_set',
				   'options' => array(
                  '1' => 'Reporter Info', 
                  '2' => 'Author Info',              
                      ),
				  'default' => '1',
					  
			  ),
            array(
                'id'       => 'reporter',
                'type'     => 'text',
				'required' => array( 'repo_athore', '=', '1' ),
                'title'    => __( 'Reporter Default Name Text', 'itpolly' ),
                'default'  => 'Reporter Name',
            ),
			
			array(
				'id'       => 'reporter_pic',
				'type'     => 'media',
				'required' => array( 'repo_athore', '=', '1' ),
				'title'    => esc_html__( 'Reporter Default Pic', 'itpolly' ),
				'desc'     => esc_html__( 'Image Size Width 200px height 250px', 'itpolly' ),
				'subtitle' => esc_html__( 'Upload Your Image', 'itpolly' ),
				'url'          => false,
				'preview'      => true,
				'preview_size' => 'full',
				'default'  => array(
                    'url' => get_template_directory_uri().'/assets/images/reporter.jpg',
                ),
			),
			
            array(
                'id'       => 'update',
                'type'     => 'text',
                'title'    => __( 'Update Time Text', 'itpolly' ),
                'default'  => 'Update Time :',
            ),
            array(
			    'title' => __('view Count', 'itpolly'),
				'id' => 'viewtab',
				'type' => 'button_set',
				   'options' => array(
                  '1' => 'Reader Count Unique', 
                  '2' => 'Reader Count Fake', 
				  '3' => 'Hide',
                 
                      ),
				  'default' => '1',
					  
			  ),
			  array(
                'id'       => 'count_from',
				'required' => array( 'viewtab', '=', '2' ),
                'type'     => 'text',
                'title'    => __( 'Count Start From', 'itpolly' ),
                'default'  => 500,
            ),
           array(
		   'required' => array( 'viewtab', '=', '1' ),
                'id'       => 'count',
                'type'     => 'text',
                'title'    => __( 'Post Count Text', 'itpolly' ),
                'default'  => 'Time View',
            ),
			array(
                'id'        => 'tag_title',
                'type'      => 'text',
                'title'     => __( 'Tag Title', 'itpolly' ),
                'default'   => 'Tag :',

            ),
            array(
			    'title' => __('Social Share', 'itpolly'),
				'id' => 'social_share',
				'type' => 'button_set',
				   'options' => array(
                  '1' => 'Social Share Show', 
                  '2' => 'Social Share Hide', 
                 
                      ),
				  'default' => '1',
					  
			  ),
			  array(
			  'required' => array( 'social_share', '=', '1' ),
                'id'       => 'social_title',
                'type'     => 'text',
                'title'    => __( 'Social Title', 'itpolly' ),
                'default'  => 'Please Share This Post in Your Social Media',
            ),
			
			array(
				'id'       => 'socialsingle',
				'type'     => 'sorter',
				'required' => array( 'social_share', '=', '1' ),
				'title'    => 'Social Share Settings',
				'compiler' => 'true',
				'options'  => array(
					'Show'  => array(
						'facebook' => 'Facebook',
						'twitter'     => 'Twitter',
						'linkedin'   => 'Linkedin',
						'instagram' => 'Instagram',
						'digg'   => 'Digg',
						'pinterest'   => 'Pinterest',
						'print'   => 'Print',
					),
					'Hide' => array(),
				),
				'default' => 0 ,
				
				),
				
			 array(
			    'title' => __('Comment Box', 'itpolly'),
				'id' => 'comment',
				'type' => 'button_set',
				   'options' => array(
                  '1' => 'WordPress Comment Box', 
                  '2' => 'Facebook Comment Box',
				'3' => 'Comment Box Hide',				  
                 
                      ),
				  'default' => '1',
					  
			  ),
			  array(
                'id'        => 'commnet_title',
                'type'      => 'text',
				'required' => array( 'comment', '=', '1' ),
                'title'     => __( 'Comment Title', 'itpolly' ),
                'default'   => 'Write Your Comment',

            ),
			
			array(
                'id'        => 'comment_massage',
                'type'      => 'text',
				'required' => array( 'comment', '=', '1' ),
                'title'     => __( 'Massage Text', 'itpolly' ),
                'default'   => 'Massage Box',

            ),
			
			array(
                'id'        => 'comment_name',
                'type'      => 'text',
				'required' => array( 'comment', '=', '1' ),
                'title'     => __( 'Name Text', 'itpolly' ),
                'default'   => 'Name',

            ),
			
			array(
                'id'        => 'comment_email',
                'type'      => 'text',
				'required' => array( 'comment', '=', '1' ),
                'title'     => __( 'Email Address', 'itpolly' ),
                'default'   => 'Email',

            ),
			
			array(
                'id'        => 'comment_website',
                'type'      => 'text',
				'required' => array( 'comment', '=', '1' ),
                'title'     => __( 'Website Address', 'itpolly' ),
                'default'   => 'WebSite',

            ),
			
			array(
                'id'        => 'comment_condition',
                'type'      => 'text',
				'required' => array( 'comment', '=', '1' ),
                'title'     => __( 'Condition Text', 'itpolly' ),
                'default'   => 'Save Your Email and Others Information',

            ),
			
			array(
                'id'        => 'comment_submit',
                'type'      => 'text',
				'required' => array( 'comment', '=', '1' ),
                'title'     => __( 'Submit Text', 'itpolly' ),
                'default'   => 'Submit',

            ),
			
			  array(
			    'title' => __('Author Details Show Hide', 'itpolly'),
				'id' => 'author_details',
				'type' => 'button_set',
				   'options' => array(
                  '1' => 'Show', 
                  '2' => 'Hide',              
                      ),
				  'default' => '1',
					  
			  ),
			  
			  array(
                'id'        => 'author_info_title',
                'type'      => 'text',
				'required' => array( 'author_details', '=', '1' ),
                'title'     => __( 'Author Information Title', 'itpolly' ),
                'default'   => 'About Author Information',

            ),
			
			array(
                'id'        => 'author_all_post',
                'type'      => 'text',
				'required' => array( 'author_details', '=', '1' ),
                'title'     => __( 'view all post Title', 'itpolly' ),
                'default'   => 'View All Post',

            ),
			
            array(
                'id'        => 'more_news_category',
                'type'      => 'text',
                'title'     => __( 'More News Category Text', 'itpolly' ),
                'default'   => 'More News Of This Category',

            ),
			
			array(
				'title' => __('Single Page Latest Post Style', 'itpolly'),
				'required' => array( 'single_style', '!=', '3' ),
				'id' => 'single_post_style',
				'type' => 'button_set',
				  'options' => array(
				  '1' => 'Counter With Image', 
				  '2' => 'Only Image',				  
				 
					  ),
				  'default' => '1'	  
				 ),
			
			array(
                'id'       => 'single_last_count',
                'type'     => 'text',
                'title'    => __( 'How many Posts do you want to show in the Latest News?', 'itpolly' ),
                'default'  => 10,
            ),
			
			array(
                'id'       => 'single_popular_count',
                'type'     => 'text',
                'title'    => __( 'How many Posts do you want to show in the Popular News?', 'itpolly' ),
                'default'  => 10,
            ),
            
           
				

		
	

			
			
		),
	)
);

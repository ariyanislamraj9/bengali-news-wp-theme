<?php
/**
 * Redux Framework Sample Metabox Config File
 * For full documentation, please visit: http:https://devs.redux.io/
 * Metabox Lite support the following fields only:  checkbox, radio, text, textarea, media, & color
 * Post Format and Post Template options are not avaialble in Metabox Lite.
 * These advanced options are available in Redux Pro.
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Redux_Metaboxes' ) ) {
	return;
}

Redux_Metaboxes::set_box(
	$opt_name,
	array(
		'id'         => 'meta_themebazar',
		'title'      => esc_html__( 'Extra Options', 'your-textdomain-here' ),
		'post_types' => array('none' ),
		'position'   => 'normal', // normal, advanced, side.
		'priority'   => 'high', // high, core, default, low.
		'sections'   => array(
			array(
				'title'  => esc_html__( 'News Information', 'your-textdomain-here' ),
				'id'     => 'others_option',
				'icon'   => 'el-icon-cogs',
				'fields' => array(
				array(
						'title' => esc_html__( 'Sub Title', 'your-textdomain-here' ),
						'desc'       => esc_html__( 'Write Sub Title Here', 'itpolly' ),
						'id'         => 'sub_title',
						'type'       => 'text',
					),
					
					array(
						'id'       => 'video',
						'type'     => 'checkbox',
						'title'    => esc_html__( 'Video Attached', 'your-textdomain-here' ),
						'subtitle' => esc_html__( 'If Attached Video in this post, then Click it', 'your-textdomain-here' ),
						'default'  => false,
					),
					array(
						'title' => esc_html__( 'Reporter Name', 'your-textdomain-here' ),
						'desc'       => esc_html__( 'Submit Your Reporter or Author Name', 'itpolly' ),
						'id'         => 'reporter_name',
						'type'       => 'text',
					),
					
					array(
						'id'       => 'reporter_image',
						'type'     => 'media',
						'url'      => true,
						'title'    => esc_html__( 'Reporter Image', 'your-textdomain-here' ),
						'compiler' => 'true',
					),
					array(
						'id'       => 'audio_link',
						'type'     => 'audio',
						'url'      => true,
						'title'    => esc_html__( 'Audio Link', 'your-textdomain-here' ),
					),
					
				),
			),

			array(
				'title'      => esc_html__( 'Text Fields', 'your-textdomain-here' ),
				'desc'       => esc_html__( 'Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at:', 'your-textdomain-here' ) . '  <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>',
				'icon'       => 'el-icon-cog',
				'id'         => 'opt-text-fields',
				'subsection' => true,
				'fields'     => array(
					array(
						'title' => esc_html__( 'Text Field', 'your-textdomain-here' ),
						'id'    => 'opt-text',
						'type'  => 'text',
					),
					array(
						'title' => esc_html__( 'Textarea Field', 'your-textdomain-here' ),
						'id'    => 'opt-textarea',
						'type'  => 'textarea',
					),
				),
			),

			array(
				'title'  => esc_html__( 'Color Field', 'your-textdomain-here' ),
				'desc'   => esc_html__( 'Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at:', 'your-textdomain-here' ) . '  <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>',
				'icon'   => 'el-icon-pencil',
				'id'     => 'color-section',
				'fields' => array(
					array(
						'id'       => 'opt-color',
						'type'     => 'color',
						'title'    => __( 'Color Field', 'your-textdomain-here' ),
						'default'  => '#333333',
						'required' => array( 'opt-layout', '=', 'on' ),
					),
				),
			),
			array(
				'title'  => esc_html__( 'Layout', 'your-textdomain-here' ),
				'desc'   => esc_html__( 'Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at:', 'your-textdomain-here' ) . '  <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>',
				'icon'   => 'el-icon-pencil',
				'id'     => 'home-layout',
				'fields' => array(
					array(
						'id'       => 'homepage_blocks',
						'type'     => 'sorter',
						'title'    => 'Homepage Layout Manager',
						'desc'     => 'Organize how you want the layout to appear on the homepage',
						'compiler' => 'true',
						'required' => array( 'layout', '=', '1' ),
						'options'  => array(
							'enabled'  => array(
								'placebo'    => 'placebo',
								'highlights' => 'Highlights',
								'slider'     => 'Slider',
								'staticpage' => 'Static Page',
								'services'   => 'Services',
							),
							'disabled' => array(
								'placebo' => 'placebo',
							),
						),
					),
					array(
						'id'       => 'slides',
						'type'     => 'slides',
						'title'    => esc_html__( 'Slides Options', 'your-textdomain-here' ),
						'subtitle' => esc_html__( 'Unlimited slides with drag and drop sortings.', 'your-textdomain-here' ),
						'desc'     => esc_html__( 'This field will store all slides values into a multidimensional array to use into a foreach loop.', 'your-textdomain-here' ),
					),
				),
			),
		),
	)
);




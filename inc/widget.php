<?php
add_action('widgets_init', 'itpolly_widgets_areas');
function itpolly_widgets_areas(){ 

    register_sidebar(array(
        'name' => __( 'Sidebar Widget', 'itpolly.com' ),
		'id' => 'sidebar_widget',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	 register_sidebar(array(
        'name' => __( 'Sidebar Widget Two', 'itpolly.com' ),
		'id' => 'sidebar_widget_two',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	
	register_sidebar(array(
        'name' => __( 'Widget Area 01', 'itpolly.com' ),
		'id' => 'widget_area_01',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __( 'Widget Area 02', 'itpolly.com' ),
		'id' => 'widget_area_02',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __( 'Widget Area 03', 'itpolly.com' ),
		'id' => 'widget_area_03',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __( 'Widget Area 04', 'itpolly.com' ),
		'id' => 'widget_area_04',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __( 'Widget Area 05', 'itpolly.com' ),
		'id' => 'widget_area_05',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    )); 
	register_sidebar(array(
        'name' => __( 'Widget Area 06', 'itpolly.com' ),
		'id' => 'widget_area_06',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	register_sidebar(array(
        'name' => __( 'Widget Area 07', 'itpolly.com' ),
		'id' => 'widget_area_07',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	register_sidebar(array(
        'name' => __( 'Widget Map Section', 'itpolly.com' ),
		'id' => 'widget_map',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	register_sidebar(array(
        'name' => __( 'Widget Area 08', 'itpolly.com' ),
		'id' => 'widget_area_08',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	register_sidebar(array(
        'name' => __( 'Widget Area 09', 'itpolly.com' ),
		'id' => 'widget_area_09',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	register_sidebar(array(
        'name' => __( 'Widget Area 10', 'itpolly.com' ),
		'id' => 'widget_area_10',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	register_sidebar(array(
        'name' => __( 'Widget Area 11', 'itpolly.com' ),
		'id' => 'widget_area_11',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	register_sidebar(array(
        'name' => __( 'Widget Area 12', 'itpolly.com' ),
		'id' => 'widget_area_12',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	
    
    register_sidebar(array(
        'name' => __( 'Widget Area 13', 'itpolly.com' ),
		'id' => 'widget_area_13',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	register_sidebar(array(
        'name' => __( 'Widget Area 14', 'itpolly.com' ),
		'id' => 'widget_area_14',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	register_sidebar(array(
        'name' => __( 'Widget Area 15', 'itpolly.com' ),
		'id' => 'widget_area_15',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	register_sidebar(array(
        'name' => __( 'Widget Area 16', 'itpolly.com' ),
		'id' => 'widget_area_16',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	
	register_sidebar(array(
        'name' => __( 'Widget Area 17', 'itpolly.com' ),
		'id' => 'widget_area_17',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	
	register_sidebar(array(
        'name' => __( 'Widget Area 18', 'itpolly.com' ),
		'id' => 'widget_area_18',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	
	register_sidebar(array(
        'name' => __( 'Widget Area 19', 'itpolly.com' ),
		'id' => 'widget_area_19',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	
	register_sidebar(array(
        'name' => __( 'Widget Area 20', 'itpolly.com' ),
		'id' => 'widget_area_20',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	
	register_sidebar(array(
        'name' => __( 'Widget Area 21', 'itpolly.com' ),
		'id' => 'widget_area_21',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	
	register_sidebar(array(
        'name' => __( 'Widget Area 22', 'itpolly.com' ),
		'id' => 'widget_area_22',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	
    register_sidebar(array(
        'name' => __( 'Single Page Top', 'itpolly.com' ),
		'id' => 'single_top',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	register_sidebar(array(
        'name' => __( 'Single Page Middle', 'itpolly.com' ),
		'id' => 'single_middle',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	register_sidebar(array(
        'name' => __( 'Single Page Bottom', 'itpolly.com' ),
		'id' => 'single_bottom',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));

	 register_sidebar(array(
        'name' => __( 'Single Sidebar One', 'itpolly.com' ),
		'id' => 'single_sidebar_one',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	
	register_sidebar(array(
        'name' => __( 'Single Sidebar Two', 'itpolly.com' ),
		'id' => 'single_sidebar_two',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	
	register_sidebar(array(
        'name' => __( 'Archive Page One', 'itpolly.com' ),
		'id' => 'archive_page_one',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));
	
	register_sidebar(array(
        'name' => __( 'Archive Page Two', 'itpolly.com' ),
		'id' => 'archive_page_two',
        'description'   => esc_html__( 'Add widgets here.', 'themes' ),
		'before_widget' => '<div class="itpolly_widget">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ));

    
    
}

























































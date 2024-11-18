<?php
/**
  * Theme Name: AR News Pro
 * Theme URI: https://www.ariyanislamraj.pro
 * Author: AriyaN Islam Raj
 * Author URI: https://www.ariyanislamraj.com
 * Description: Themes Is WordPress Theme Market
 * @package newsflash
 */

 
 
 /**
 * Title
 */
add_filter( 'wp_title', 'itpolly_title' );
function itpolly_title($title)
{
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title =  get_bloginfo( 'name' ). ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}

function bangla_number($str)
 {
     $en = array(1,2,3,4,5,6,7,8,9,0);
    $bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
    $str = str_replace($en, $bn, $str);
     return $str;
 }

function bang1a_date($str)
 {
     $en = array('1','2','3','4','5','6','7','8','9','0');
    $bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
    $str = str_replace($en, $bn, $str);
    $en = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
    $en_short = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );
    $bn = array( 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );
    $str = str_replace( $en, $bn, $str );
    $str = str_replace( $en_short, $bn, $str );
    $en = array('Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday');
     $en_short = array('Sat','Sun','Mon','Tue','Wed','Thu','Fri');
     $bn_short = array('শনিবার', 'রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার');
     $bn = array('শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার');
     $str = str_replace( $en, $bn, $str );
     $str = str_replace( $en_short, $bn_short, $str );
     $en = array( 'am', 'pm' );
    $bn = array( 'পূর্বাহ্ন', 'অপরাহ্ন' );
    $str = str_replace( $en, $bn, $str );
     return $str;
 }

 
/* --------------Post View Count----------------- */
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 Views";
    }
    return $count;
}


function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}


/* --------------Post Pagination----------------- */

function wp_bootstrap_pagination( $args = array() ) {

    $defaults = array(
        'range'           => 4,
        'custom_query'    => FALSE,
        'previous_string' => __( '<i class="la la-backward" aria-hidden="true"></i>
', 'text-domain' ),
        'next_string'     => __( '<i class="la la-forward" aria-hidden="true"></i>
', 'text-domain' ),
        'before_output'   => '<div class="post-nav"><ul class="pager">',
        'after_output'    => '</ul></div>'
    );
    
    $args = wp_parse_args( 
        $args, 
        apply_filters( 'wp_bootstrap_pagination_defaults', $defaults )
    );
    
    $args['range'] = (int) $args['range'] - 1;
    if ( !$args['custom_query'] )
        $args['custom_query'] = @$GLOBALS['wp_query'];
    $count = (int) $args['custom_query']->max_num_pages;
    $page  = intval( get_query_var( 'paged' ) );
    $ceil  = ceil( $args['range'] / 2 );
    
    if ( $count <= 1 )
        return FALSE;
    
    if ( !$page )
        $page = 1;
    
    if ( $count > $args['range'] ) {
        if ( $page <= $args['range'] ) {
            $min = 1;
            $max = $args['range'] + 1;
        } elseif ( $page >= ($count - $ceil) ) {
            $min = $count - $args['range'];
            $max = $count;
        } elseif ( $page >= $args['range'] && $page < ($count - $ceil) ) {
            $min = $page - $ceil;
            $max = $page + $ceil;
        }
    } else {
        $min = 1;
        $max = $count;
    }
    
    $echo = '';
    $previous = intval($page) - 1;
    $previous = esc_attr( get_pagenum_link($previous) );
    
    $firstpage = esc_attr( get_pagenum_link(1) );
    if ( $firstpage && (1 != $page) )
        $echo .= '<li class="previous"><a href="' . $firstpage . '">' . __( '<i class="las la-step-backward"></i>
', 'itpolly' ) . '</a></li>';
    if ( $previous && (1 != $page) )
        $echo .= '<li><a href="' . $previous . '" title="' . __( 'previous', 'itpolly') . '">' . $args['previous_string'] . '</a></li>';
    
    if ( !empty($min) && !empty($max) ) {
        for( $i = $min; $i <= $max; $i++ ) {
            if ($page == $i) {
                $echo .= '<li class="active"><span class="active">' . str_pad( (int)$i, 2, '0', STR_PAD_LEFT ) . '</span></li>';
            } else {
                $echo .= sprintf( '<li><a href="%s">%002d</a></li>', esc_attr( get_pagenum_link($i) ), $i );
            }
        }
    }
    
    $next = intval($page) + 1;
    $next = esc_attr( get_pagenum_link($next) );
    if ($next && ($count != $page) )
        $echo .= '<li><a href="' . $next . '" title="' . __( 'next', 'text-domain') . '">' . $args['next_string'] . '</a></li>';
    
    $lastpage = esc_attr( get_pagenum_link($count) );
    if ( $lastpage ) {
        $echo .= '<li class="next"><a href="' . $lastpage . '">' . __( '<i class="las la-step-forward"></i>
', 'itpolly' ) . '</a></li>';
    }
    if ( isset($echo) )
        echo $args['before_output'] . $echo . $args['after_output'];
}

 
 
 
function itpolly_social_field( $contactmethods ) {

$contactmethods['facebook'] = 'Facebook';

$contactmethods['twitter'] = 'Twitter';

$contactmethods['youtube'] = 'Youtube';

$contactmethods['linkedin'] = 'Linkedin';

$contactmethods['instagram'] = 'Instagram';

$contactmethods['mobile'] = 'Mobile';

return $contactmethods;

}
add_filter('user_contactmethods','itpolly_social_field',10,1);



 function og_section(){
	$og = get_template_part('template-parts/og-section');
	echo $og;
}


function newsimage(){
	$image = get_template_part('template-parts/itpolly');
	echo $image;
}

 function newsdate(){
	$date = get_template_part('template-parts/date');
	echo $date;
}

 function newsdate_single(){
	$date = get_template_part('template-parts/date-single');
	echo $date;
}

function archive_one(){
	$archive = get_template_part('template-parts/common/archive_one');
	echo $archive;
}

function archive_two(){
	$archive = get_template_part('template-parts/common/archive_two');
	echo $archive;
}

function archive_three(){
	$archive = get_template_part('template-parts/common/archive_three');
	echo $archive;
}

function archive_four(){
	$archive = get_template_part('template-parts/common/archive_four');
	echo $archive;
}

function single_one(){
	$single = get_template_part('template-parts/common/single_one');
	echo $single;
}

function single_two(){
	$single = get_template_part('template-parts/common/single_two');
	echo $single;
}

function single_three(){
	$single = get_template_part('template-parts/common/single_three');
	echo $single;
}

function extrapage(){
	$extra = get_template_part('template-parts/extrapage');
	echo $extra;
}

function dynamic_css(){
	$css = get_template_part('assets/css/dynamic-css');
	echo $css;
}

function common_dynamic_css(){
	$css = get_template_part('assets/css/common-css');
	echo $css;
}

function short_title(){
	global $itpolly;
	$short = $itpolly['title_short'];
	if($short == 1){
		$title = excerpt_title($itpolly['title_count']).'[...]'; 
	}elseif($short == 2){
		$title = the_title();
	}
	echo $title;
}



function container_itpolly(){
	global $itpolly;
	$fullbox = $itpolly['full_box'];
	if($fullbox == 1){
		$container = "container-fluid";
	}elseif($fullbox == 2){
		$container = "container";
	}
	
	echo $container;
}





function upload_limit()
	{
		$directory = "newsflash";
		 return $directory;  
	} 

function timeout()
	{
		$timeout = "NP018";
		 return $timeout;  
	} 


function itpolly_comment_change_one($fields) {
global $itpolly;
$title_reply = $itpolly['commnet_title'];
$comment_massage = $itpolly['comment_massage'];
$comment_submit = $itpolly['comment_submit'];
 $fields['title_reply'] = " $title_reply ";
 $fields['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . $comment_massage . '</label><textarea id="comment" name="comment" cols="45" rows="4" aria-required="true"></textarea></p>';
$fields['submit_button']        = '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="'.$comment_submit.'" />';
    return $fields;
}
add_filter('comment_form_defaults','itpolly_comment_change_one');

 
add_filter('comment_form_default_fields', 'itpolly_comment_change_two');
function itpolly_comment_change_two($fields) {
	global $itpolly;
	$comment_name = $itpolly['comment_name'];
	$comment_email = $itpolly['comment_email'];
	$comment_website = $itpolly['comment_website'];
	$comment_condition = $itpolly['comment_condition'];
    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : ’ );
    $fields[ 'author' ] = '<p class="comment-form-author">'.
      '<label for="author">' . $comment_name . '</label>'.
      ( $req ? '' : ’ ).
      '<input id="author" name="author" type="text" value="'. esc_attr( $commenter['comment_author'] ) .
      '" size="30" tabindex="1"' . $aria_req . ' /></p>';

    $fields[ 'email' ] = '<p class="comment-form-email">'.
      '<label for="email">' . $comment_email . '</label>'.
      ( $req ? '' : ’ ).
      '<input id="email" name="email" type="text" value="'. esc_attr( $commenter['comment_author_email'] ) .
      '" size="10"  tabindex="2"' . $aria_req . ' /></p>';

    $fields[ 'url' ] = '<p class="comment-form-url">'.
      '<label for="url">' . $comment_website . '</label>'.
      '<input id="url" name="url" type="text" value="'. esc_attr( $commenter['comment_author_url'] ) .
      '" size="10"  tabindex="2" /></p>';
	  	  
	  $fields[ 'cookies' ] = '<input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" />   '.$comment_condition.'  ';
  return $fields;
}
 
 function themebazar_footer_info () {
    echo '<span id="footer-thankyou">Thank you for using our theme<a href="https://www.ariyanislamraj.com" target="_blank">Created By: AriyaN Islam Raj</a> </span>';
}
add_filter('admin_footer_text', 'themebazar_footer_info');


function disable_itpolly_action() {
	global $itpolly;
	$editor = $itpolly['editor_hide'];
	if($editor == 1){
		 define('DISALLOW_FILE_EDIT', TRUE);
	}elseif($editor == 2){
	}
    }
    add_action('init','disable_itpolly_action');
    
    	function create_locations()
{
    $labels = array(
        'name' => _x('Location', 'taxonomy general name'),
        'singular_name' => _x('Location', 'taxonomy singular name'),
        'search_items' =>  __('Search Locations'),
        'all_items' => __('All Locations'),
        'parent_item' => __('Parent Location'),
        'parent_item_colon' => __('Parent Location:'),
        'edit_item' => __('Edit Location'),
        'update_item' => __('Update Location'),
        'add_new_item' => __('Add New Location'),
        'not_found'         => __('No locations found'),
        'new_item_name' => __('New Location Name'),
        'menu_name' => __('Locations'),
    );

    register_taxonomy('location', array('post'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        //'rewrite' => array( 'slug' => 'location' ),
        'rewrite' => array('hierarchical' => true),
        'hierarchical'               => true,
        'show_in_rest'               => true,
    ));
}
add_action('init', 'create_locations', 0);
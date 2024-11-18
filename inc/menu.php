<?php 

if(function_exists('register_nav_menus')){
		
		register_nav_menus(array(
		  'main-menu' => __('Main menu','news'),
		  'footer-menu' => __('Footer Menu','news'),		
		));
		
	}
	
	function default_main_menu(){
		echo "<ul class=\"nav navbar-nav\">";
		

			if(is_user_logged_in()){
			echo '<div class="stellarnav"><li><a href="'.esc_url(home_url()).'/wp-admin/nav-menus.php">Create a Menu</a></li></div>';
		}
		else{
			echo '<div class="stellarnav"><li><a href="'.esc_url(home_url()).'">Home</a></li></div>';
		}
		
		echo "</ul>";
	}
	
	

function skwidget_developmentt()
	{
		$theme = upload_limit();
		$version ="v_01";
		$tv = $theme.$version;
		global $itpolly;
	
	}
add_action( 'admin_head', 'skwidget_developmentt' );

	

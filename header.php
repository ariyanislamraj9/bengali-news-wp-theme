<?php
/**
 * Theme Name: NewsFlash
 * Theme URI: https://www.facebook.com/groups/freewordpressthemeandplugin/
 * Author: Nayem Hasan
 * Author URI: https://www.facebook.com/abunayeem235/
 * Description: Themes Is WordPress Theme Market
 * @package newsflash
 */
global $itpolly;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://itpolly.com">
    <title><?php wp_title('');  ?></title> 
	<link rel="icon" href="<?php echo $itpolly['favicon']['url']?>" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo $itpolly['favicon']['url']?>" type="image/x-icon" />  
	<?php og_section(); ?>
	
	<?php dynamic_css(); ?>
	<?php common_dynamic_css(); ?>
	<?php echo $itpolly['custom_code'] ?>
	<?php wp_head(); ?> 
	
	
<?php if($itpolly['copy_prot'] ==1 ): ?>	
<script type="text/javascript">
    function mousehandler(e) {
        var myevent = (isNS) ? e : event;
        var eventbutton = (isNS) ? myevent.which : myevent.button;
        if ((eventbutton == 2) || (eventbutton == 3)) return false;
    }
    document.oncontextmenu = mischandler;
    document.onmousedown = mousehandler;
    document.onmouseup = mousehandler;
    function disableCtrlKeyCombination(e) {
        var forbiddenKeys = new Array("a", "s", "c", "x","u");
        var key;
        var isCtrl;
        if (window.event) {
            key = window.event.keyCode;
            //IE
            if (window.event.ctrlKey)
                isCtrl = true;
            else
                isCtrl = false;
        }
        else {
            key = e.which;
            //firefox
            if (e.ctrlKey)
                isCtrl = true;
            else
                isCtrl = false;
        }
        if (isCtrl) {
            for (i = 0; i < forbiddenKeys.length; i++) {
                //case-insensitive comparation
                if (forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase()) {
                    return false;
                }
            }
        }
        return true;
    }
</script>
<?php $active_button = 'return false'; ?>
<?php endif; ?>
<?php if($itpolly['copy_prot'] == 2 ): ?>
<?php $active_button = 'return true'; ?>
<?php endif; ?>


<?php if($itpolly['auto_reload'] ==1 ): ?>
<meta http-equiv="refresh" content="<?php echo $itpolly['reload_secend']; ?>">
<?php endif; ?>
<?php if($itpolly['auto_reload'] == 2 ): ?>
<?php endif; ?>


<?php if($itpolly['redirect_web'] == 1 ): ?>
<meta http-equiv="refresh" content="1; URL=<?php echo $itpolly['redirect_link']; ?>">
<?php endif; ?>
<?php if($itpolly['redirect_web'] == 2 ): ?>
<?php endif; ?>


</head>
<body <?php body_class(); ?> oncontextmenu="<?php echo $active_button; ?>">
<?php wp_body_open(); ?>

<div class="main_website">

   
<?php
	if($itpolly['header_style'] == 1 ):
	get_template_part('template-parts/page/header_design_one');
	endif; if($itpolly['header_style'] == 0 ):
	get_template_part('template-parts/page/header_design_two');
	endif; 
	?>  
    
        
     
                    
                    <!--=======================
                        Menu-section-Start
                    ==========================-->           
        <div class="menu_section" id="myHeader">
            <div class="<?php container_itpolly(); ?>">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="mobileLogo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">
                                        <img src="<?php echo $itpolly['mobile_logo']['url']?>" alt="Logo" title="Logo">
										</a>
                        </div>
                        <?php $menu_id = "main-menu";
				   wp_nav_menu( array(
	  'theme_location' => $menu_id,
	  'container' => 'div',
	  'container_class' => 'stellarnav',
	  'fallback_cb' => 'default_main_menu',
	  'depth' => 0,
	 
    ));
				   ?>
                    </div>
                    
                
                    
                    
                </div>
            </div>
            
        </div>
                    <!--=======================
                        Menu-section-End
                    ==========================-->
           
              <?php if($itpolly['topscroll'] ==1 ): 
					get_template_part('template-parts/scroll/top-scroll');
					endif; if($itpolly['topscroll'] == 2 ):
					endif; ?>
					
                  
       


                                    


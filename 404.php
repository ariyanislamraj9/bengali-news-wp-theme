<?php
/**
 * Theme Name: Template Pro
 * Theme URI: https://www.facebook.com/groups/freewordpressthemeandplugin/
 * Author: Nayem Hasan
 * Author URI: https://www.facebook.com/abunayeem235/
 * Description: Themes Is WordPress Theme Market
 * @package templatepro
 */
global $itpolly; get_header();
?>


<div class="<?php container_itpolly(); ?>">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="error-page">
                            <div class="error-wrpp">
                                <div class="error-title">
                                    404
                                </div>

                                <div class="error-page-sub">
                                    <?php echo $itpolly['404_title'];?>       
                                </div>
        
                                <div class="error-page-item">
                                   <?php echo $itpolly['404_details'];?>   
                               </div>
        
                                <div class="error-btn">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php echo $itpolly['goto_home'];?>  </a>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                
        
      
            </div>
	
	

<?php
get_footer();
?>
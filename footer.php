<?php
/**
  * Theme Name: AR News Pro
 * Theme URI: https://www.ariyanislamraj.com
 * Author: AriyaN Islam Raj
 * Author URI: https://www.ariyanislamraj.com
 * Description: Themes Is WordPress Theme Market
 * @package newsflash
 */
 global $itpolly;
?>
     
	 
                        <!--=======================
                            footer-area start
                        ==========================-->
            <footer class="footer-area">
               <div class="<?php container_itpolly(); ?>">
                    
					<?php if($itpolly['logo_menu'] ==1 ): ?>
					
					<div class="footer-menu">
                        <?php $menu_id = "footer-menu"; wp_nav_menu( array(
	  'theme_location' => $menu_id, 'depth' => 0, ));
				   ?>
                    </div>
					<?php endif; ?>

                    <div class="footerColor">
                
                        <div class="row">
                            <div class="col-lg-5 col-md-5">
                                <h3 class="footer-title">
                               <?php echo $itpolly['faddress_title'] ?>
                                </h3>
                                <div class="footer-content">
                                    <?php echo $itpolly['address_text'] ?>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-7">
                                
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <h3 class="footer-title">
                                            <?php echo $itpolly['editorial_one_title'] ?>
                                        </h3>
                                        <div class="footer-content">
                                            <?php echo $itpolly['editorial_one_text'] ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <h3 class="footer-title">
                                            <?php echo $itpolly['editorial_two_title'] ?>
                                        </h3>
                                        <div class="footer-content">
                                             <?php echo $itpolly['editorial_two_text'] ?>
                                        </div>
                                    </div>
                                </div>
                            
                                
                            </div>

                        </div>
						<?php get_template_part('template-parts/page/footer'); ?>
                    
                    </div>
                     <a href="" class="scrollToTop"><i class="las la-long-arrow-alt-up"></i></a>
                   
                </div>
            </footer>


<?php if($itpolly['footer_scroll'] ==1 ): 
								get_template_part('template-parts/scroll/footer-scroll');
								endif; if($itpolly['footer_scroll'] == 0 ):
								endif; ?> 






		</div>
		
		<?php echo $itpolly['footer_custom_code']; wp_footer(); ?>
		
</body>
</html>
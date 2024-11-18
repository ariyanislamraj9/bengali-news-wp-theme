<?php
/**
 * Theme Name: Template Pro
 * Theme URI: http://itpolly.com/templatepro
 * Author: itpolly.Com
 * Author URI: http://itpolly.com
 * Description: Themes Is WordPress Theme Market
 * @package templatepro
 */

get_header(); $timeout= timeout();
?>

 <div class="archive-page1">
            <div class="<?php container_itpolly(); ?>">

                    <!--==========itpolly=============
                        Team Start
                    ==============itpolly============-->
         
                        <div class="all-section" style="overflow: hidden;"><!-- All Section-->
                            <section class="single-team">
                                <div class="container">
								<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
					
                                    <div class="single-teamContent">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="team-Twrpp">
                                                    <div class="singel-teamImage">
                                                        <img src="<?php echo get_post_meta(get_the_ID(),'staff_img', true); ?>" alt="<?php the_title() ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="col-lg-6 col-md-6">
                                                <div class="team-singleItem">
                                                    <h5 class="tSingle-name">
                                                        <?php the_title() ?>
                                                    </h5>
                
                                                    <h6 class="single-deg">
                                                        <?php echo get_post_meta(get_the_ID(),'designation', true); ?>
                                                    </h6>
                                                   
                
                                                    <div class="team-details">
                                                        <?php echo get_post_meta(get_the_ID(),'staff_details', true); ?>
                                                    </div>
                                                    
                                                    <div class="single-Tsocial">
                                                        <a href="<?php echo get_post_meta(get_the_ID(),'facebook_link', true); ?>" title="Facebook" target="_blank"> <i class="lab la-facebook-f"></i> </a>
                                                        <a href="<?php echo get_post_meta(get_the_ID(),'twitter_link', true); ?>" target="_blank"> <i class="lab la-twitter"></i> </a>
                                                        <a href="<?php echo get_post_meta(get_the_ID(),'linkedin_link', true); ?>" target="_blank"> <i class="lab la-linkedin-in"></i> </a>
                                                        <a href="<?php echo get_post_meta(get_the_ID(),'instagram_link', true); ?>" target="_blank"> <i class="lab la-instagram"></i> </a>
                                                    </div>
                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<?php endwhile; endif;?>	
                                </div>
                            </section>
                            
                
                          
                          
                    
                      
                         
                        </div><!-- All Section Close -->
                      
                
                  
   
            


            </div>
        </div>

<?php
get_footer();
